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
        $jobs = DateJob::where('user_id', $user->id)->with('girlsProfile')->get();

        if (!$jobs) {
            // エラー文はフロント側で記述する
            return response()->json([], 500);
        }

        return response()->json([
            'user' => $user,
            'jobAndProfile' => $jobs,
        ]);
    }
}
