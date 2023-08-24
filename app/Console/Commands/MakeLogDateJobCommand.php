<?php

namespace App\Console\Commands;

use App\Models\CommentOnDateJob;
use App\Models\DateJob;
use App\Models\LogDateJob;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class MakeLogDateJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'MakeLogDateJobCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'デート予定時刻を過ぎたジョブについて、date_jobsテーブルから削除しlog_date_jobsテーブルに登録する';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $nowDateTime = Carbon::now();

        $recordsToMove = DateJob::where(function ($query) use ($nowDateTime) {
            // date_of_dateが現在の日付より前の場合、または
            // date_of_dateが現在の日付と同じでかつtime_of_dateが現在の時刻より前の場合を取得
            $query->where('date_of_date', '<', $nowDateTime->toDateString())
                ->orWhere(function ($query) use ($nowDateTime) {
                    $query->where('date_of_date', $nowDateTime->toDateString())
                        ->where('time_of_date', '<=', $nowDateTime->toTimeString());
                });
        })->get();

        if($recordsToMove) {
            try {
                // log_date_jobsテーブルにレコードを登録
                foreach ($recordsToMove as $record) {
                    $logDateJob = new LogDateJob();
                    $logDateJob->user_id = $record->user_id;
                    $logDateJob->girl_id = $record->girl_id;
                    $logDateJob->date_of_date = $record->date_of_date;
                    $logDateJob->time_of_date = $record->time_of_date;
                    $logDateJob->place_of_date = $record->place_of_date;
                    $logDateJob->passion = $record->passion;
                    $logDateJob->target = $record->target;
                    $logDateJob->save();
                    CommentOnDateJob::where('job_id', $record->id)->delete();
                }

                // date_jobsテーブルから取得したレコードを削除
                $recordsToMove->each->delete();
                Log::info('デートのジョブを削除し、ログとして残すことに成功しました。');
            } catch (\Exception $e) {
                Log::error('Error occurred during record move: ' . $e->getMessage());
            }
        }else{
            return;
        }
    }
}
