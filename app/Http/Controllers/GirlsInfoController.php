<?php

namespace App\Http\Controllers;

use App\Models\CommentOnDateJob;
use App\Models\DateJob;
use App\Models\GirlsProfile;
use App\Models\User;
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

            GirlsProfile::where('id', $id)->delete();

            return response()->json(['message' => '削除に成功しました']);
        } catch (\Exception $e) {
            return response()->json(['message' => '削除に失敗しました']);
        }
    }

    public function editGirlsInfo(Request $request)
    {
        try {
            $user = $request->user();
            $girlsID = $request->input('girlsID');

            $updateGirl = GirlsProfile::where('user_id', $user['id'])
                ->where('id', $girlsID)->first();

            //空欄で更新されてもそれが有効になる
            $updateGirl->update([
                'name' => $request->input('name'),
                'age' => $request->input('age'),
                'image_url' => $request->input('image_url'),
                'occupation' =>$request->input('occupation'),
                'user_id' => $user['id'] ?: $updateGirl->user_id,
                'address' => $request->input('address'),
                'birthday' => $request->input('birthday'),
                'character' => $request->input('character'),
                'feature_first' => $request->input('feature_first'),
                'feature_second' => $request->input('feature_second'),
                'feature_third' => $request->input('feature_third'),
                'hobby' => $request->input('hobby'),
                'favorite_foods' => $request->input('favorite_foods'),
                'dislike_foods' => $request->input('dislike_foods'),
                'favorite_type_of_man' => $request->input('favorite_type_of_man'),
                'opportunity_to_meet' => $request->input('opportunity_to_meet'),
                'has_boyfriend' => $request->input('has_boyfriend'),
                'count_of_dates' => $request->input('count_of_dates'),
                'notice' => $request->input('notice'),
            ]);

        } catch (\Exception $e) {
            // その他の例外が発生した場合の処理
            Log::error($e->getMessage()); // エラーメッセージをログに出力
            // エラーメッセージを返す
            return 'Error occurred.';
        }

        return 'success';
    }


}
