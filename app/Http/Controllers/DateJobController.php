<?php

namespace App\Http\Controllers;

use App\Models\CommentOnDateJob;
use App\Models\DateJob;
use App\Models\Friendship;
use App\Models\GirlsProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DateJobController extends Controller
{
    public function fetchGirlsList(Request $request)
    {
        $user = $request->user();

        $girlsName = GirlsProfile::where('user_id',$user['id'])
            ->select('name')->get();

        return response()->json($girlsName);
    }

    public function makeDateJob(Request $request)
    {
        try {
            $user = $request->user();

            $newDateJob = new DateJob();

            $girlsProfiles = GirlsProfile::where('user_id', $user['id'])->get();
            foreach ($girlsProfiles as $girlsProfile) {
                // girls_profilesテーブルからnameが$girlsNameConfirmと合致するレコードを探す
                if ($girlsProfile->name === $request['girlsNameConfirm']) {
                    // 該当のレコードが見つかった場合は、そのidを取得
                    $newDateJob->girl_id = $girlsProfile->id;
                    break; // 見つかったらループを抜ける
                }
            }

            if (!isset($newDateJob->girl_id)) {
                // 該当のレコードが見つからなかった場合は新しいレコードを作成して保存
                $newGirl = new GirlsProfile();
                $newGirl->user_id = $user['id'];
                $newGirl->name = $request['girlsNameConfirm'];
                $newGirl->save();

                // 新しいレコードのidを取得
                $newDateJob->girl_id = $newGirl->id;
            }
            $newDateJob->user_id = $user['id'];
            $newDateJob->date_of_date = $request['dateOfDate'];
            $newDateJob->time_of_date = $request['timeOfDate'];
            $newDateJob->place_of_date = $request['placeOfDate'];
            $newDateJob->passion = $request['passion'];
            $newDateJob->target = $request['target'];

            $newDateJob->save();

            // 成功時の処理を記述
            return 'success';
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return 'error';
        }
    }

    public function postComment(Request $request)
    {
        try {
            $user = $request->user();
            $index = $request->index;
            $type = $request['type'];
            $value = $request['comment'];

            if($type != 'friend') {
                $jobs = DateJob::where('user_id', $user->id)
                    ->orderBy('date_of_date', 'asc')
                    ->get();
                $selectedJob = $jobs[$index];
                $newComment = new CommentOnDateJob();
                $newComment->value = $value;
                $newComment->user_id = $user['id'];
                $newComment->job_id = $selectedJob['id'];
                $newComment->save();
            }else{
                $friendData = Friendship::where('user_id', $user->id)
                    ->where('status', 1)
                    ->get();
                $friendIds = $friendData->pluck('followed_user_id');

                $selectedFriendJobs = DateJob::whereIn('user_id', $friendIds)
                    ->orderBy('date_of_date','asc')
                    ->with('comment')
                    ->withCount('comment')
                    ->with('girlsProfile')
                    ->with('user')
                    ->get();
                $selectedFriendJob= $selectedFriendJobs[$index];
                $dateJobIds = $selectedFriendJob['id'];
                $newComment = new CommentOnDateJob();
                $newComment->value = $value;
                $newComment->user_id = $user['id'];
                $newComment->job_id = $dateJobIds;
                $newComment->save();
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return 'error';
        }
    }
}
