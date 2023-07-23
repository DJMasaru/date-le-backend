<?php

namespace App\Http\Controllers;

use App\Models\CommentOnDateJob;
use App\Models\DateJob;
use App\Models\GirlsProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GirlsInfoController extends Controller
{
    public function fetchGirlsInfo(Request $request)
    {
        $user = $request->user();
        $girlsInfo = GirlsProfile::where('user_id', $user->id)->get();

        if ($request->has('index')) {
            $index = $request->index;
            return $girlsInfo->get($index);
        }

        return $girlsInfo;
    }

    public function deleteGirlsInfo(Request $request)
    {
        try {
            $id = $request['girlsInfo']['id'];

            // GirlsProfileを削除する前に、関連するDateJobレコードを削除
            // DateJobのid番号を保持
            $dateJobIds = DateJob::where('girl_id', $id)->pluck('id');

            // DateJobを削除する前に、関連するCommentOnDateJobレコードを削除
            CommentOnDateJob::whereIn('job_id', $dateJobIds)->delete();

            // DateJobを削除
            DateJob::where('girl_id', $id)->delete();

            // GirlsProfileを削除
            GirlsProfile::where('id', $id)->delete();

            return response()->json(['message' => '削除に成功しました']);
        } catch (\Exception $e) {
            return response()->json(['message' => '削除に失敗しました']);
        }
    }

    public function editGirlsInfo(Request $request)
    {
        Log::debug($request);

        return 'success';
    }

}
