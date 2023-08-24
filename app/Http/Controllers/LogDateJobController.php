<?php

namespace App\Http\Controllers;

use App\Models\CommentOnDateJob;
use App\Models\LogDateJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogDateJobController extends Controller
{
    public function fetchDateLog(Request $request)
    {
        $user = $request->user();

        if(!$request['index']) {
            $dateLog = LogDateJob::where('user_id', $user['id'])
                ->with('girlsProfile')
                ->orderBy('date_of_date')
                ->orderBy('time_of_date')
                ->get();

            return $dateLog;
        }else{
            $dateLog = LogDateJob::where('id', $request['index'])
                ->with('girlsProfile')
                ->first();
            $comments = CommentOnDateJob::where('job_id', $dateLog->id)->with('commentByUser')->get();
            $dataArray = json_decode($comments, true);
            $commentsCount = collect($dataArray)->count();

            return response()->json(['dateLog' => $dateLog, 'comments' => $comments,'comments_count' => $commentsCount]);
        }


    }
}
