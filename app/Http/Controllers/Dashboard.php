<?php

namespace App\Http\Controllers;

use App\Models\DateJob;
use App\Models\GirlsProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Dashboard extends Controller
{
    public function getUserInfo(Request $request)
    {
        $user = $request->user();
        $jobs = DateJob::where('user_id',$user -> id )->get();
        $jobAndProfile = [];
        foreach ($jobs as $job) {
            $girl = GirlsProfile::where('id', $job->girl_id)->first();
            $jobData = $job->toArray();
            $girlData = $girl->toArray();

            // girls_profilesテーブルから取得したデータを入れ子の配列に格納
            $girlDataPrefixed = ['girls_profiles' => $girlData];

            // $jobと$girlのデータをマージして$jobAndProfileに追加
            $jobAndProfile[] = array_merge($jobData, $girlDataPrefixed);
        }

        Log::debug($jobAndProfile);
        if (!$jobAndProfile) {
            // エラー文はフロント側で記述する
            return response()->json([], 500);
        }

        return response()->json([
            'user' => $user,
            'jobAndProfile' => $jobAndProfile,
        ]);
    }
}
