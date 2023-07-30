<?php

namespace App\Http\Controllers;

use App\Models\CommentOnDateJob;
use App\Models\DateJob;
use App\Models\Friendship;
use App\Models\GirlsProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function getUserInfo(Request $request)
    {
        $user = $request->user();

        //詳細画面でもこのコードをもとにデートする女性の情報を取得している
        $jobs = DateJob::where('user_id', $user->id)
            ->with('girlsProfile')
            ->withCount('comment')
            ->orderBy('date_of_date', 'asc')
            ->get();

        $friendData = Friendship::where('user_id', $user->id)
            ->where('status', 1)
            ->get();

        $friendIds = $friendData->pluck('followed_user_id'); // 友達のIDを取得

        $friendDateJobs = User::whereIn('id', $friendIds)
            ->with(['dateJobs' => function ($q) {
                $q->with('girlsProfile')
                    ->withCount('comment');
            }])
            ->get();

        if (!$jobs) {
            // エラー文はフロント側で記述する
            return response()->json([], 500);
        }

        return response()->json([
            'user' => $user,
            'jobAndProfile' => $jobs,
            'friendsJobAndProfile' => $friendDateJobs
        ]);
    }

    public function getDateDetail(Request $request)
    {
        if(is_numeric($request->index)) {
            $user = $request->user();
            $index = $request->index;
            if($request['type'] != 'friend') {
                //ダッシュボードに表示されているジョブカードのインデックス番号をもとにデートする女性についても取得しているためこの記述
                $jobs = DateJob::where('user_id', $user->id)
                    ->with('girlsProfile')
                    ->withCount('comment')
                    ->orderBy('date_of_date', 'asc')
                    ->get();
Log::debug($jobs);
                //デートの詳細を確認するためのインデックス番号
                $selectedJob = $jobs->get($index);
                $comments = CommentOnDateJob::where('job_id', $selectedJob->id)
                    ->with('commentByUser')
                    ->get();

                return response()->json([
                    'user' => $user,
                    'jobs' => $selectedJob,
                    'comments' => $comments,
                ]);

            }else{

            //友人のデート詳細を取得
            $friendData = Friendship::where('user_id', $user->id)
                ->where('status', 1)
                ->get();

            //友達のIDを取得
            $friendIds = $friendData->pluck('followed_user_id');

            $selectedFriendJob = User::whereIn('id', $friendIds)
            ->with(['dateJobs' => function ($q) {
                $q->with('girlsProfile')
                    ->withCount('comment');
            }])
            ->get()
            ->get($index);

            $dateJobIds = $selectedFriendJob->dateJobs->pluck('id');
            $friendComments = CommentOnDateJob::where('job_id', $dateJobIds)->with('commentByUser')->get();
            }

        return response()->json([
            'user' => $user,
            'friendDatejobs' => $selectedFriendJob,
            'friendDatecomments' => $friendComments,
        ]);
        }
    }
}
