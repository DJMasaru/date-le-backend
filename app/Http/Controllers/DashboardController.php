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
        $jobs = DateJob::where('user_id', $user->id)->with('girlsProfile')->orderBy('date_of_date', 'asc')->get();
        $friendData = Friendship::where('user_id', $user->id)
            ->where('status', 1)
            ->get();

        $friendIds = $friendData->pluck('friend_id'); // 友達のIDを取得

        $friendDateJobs = User::whereIn('id', $friendIds)
            ->with(['dateJobs' => function ($q) {
                $q->with('girlsProfile');
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
            $jobs = DateJob::where('user_id', $user->id)->with('girlsProfile')->get();
            $index = $request->index;

            //デートの詳細を確認するためのインデックス番号
            $selectedJob = $jobs->get($index);
            $comments = CommentOnDateJob::where('job_id',$selectedJob->id)->with('commentByUser')->get();

            return response()->json([
                'jobs' => $selectedJob,
                'comments' => $comments
            ]);
        }
    }
}
