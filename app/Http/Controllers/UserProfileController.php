<?php

namespace App\Http\Controllers;

use App\Models\CommentOnDateJob;
use App\Models\DateJob;
use App\Models\Friendship;
use App\Models\GirlsProfile;
use App\Models\LogDateJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function fetchUserProfile(Request $request)
    {
        $user = $request->user();

        return User::where('id', $user['id'])->first();
    }

    public function deleteUserProfile(Request $request)
    {
        $user = $request->user();


        // ユーザーのレコードを削除
        User::where('id', $user['id'])->delete();

        // レスポンスを返す（必要に応じて適切なレスポンスを設定する）
        return response()->json(['message' => 'User profile deleted successfully'], 200);
    }

    public function editUserProfile(Request $request)
    {
        try {
            $user = $request->user();

            $updateUser = User::where('id', $user['id'])
                ->first();
            $updateUser->update([
                'name' => $request->input('name') ?: $updateUser->name,
                'age' => $request->input('age') ?: $updateUser->age,
                'image_url' => $request->input('image_url') ?: $updateUser->image_url,
                'occupation' =>$request->input('occupation') ?: $updateUser->occupation,
                'address' => $request->input('address') ?: $updateUser->address,
                'hobby' => $request->input('hobby') ?: $updateUser->hobby,
                'birthday' => $request->input('birthday') ?: $updateUser->birthday,
                'girl_experiences' => $request->input('girl_experiences') ?: $user->girl_experiences,
                'favorite_feature' => $request->input('favorite_feature') ?: $user->favorite_feature,
                'favorite_date_time' => $request->input('favorite_date_time') ?: $user->favorite_date_time,
                'favorite_date_place' => $request->input('favorite_date_place') ?: $user->favorite_date_place,
                'favorite_clothes' => $request->input('favorite_clothes') ?: $user->favorite_clothes,
                'favorite_character' => $request->input('favorite_character') ?: $user->favorite_character,
                'favorite_age_range' => $request->input('favorite_age_range') ?: $user->favorite_age_range,
                'notice' => $request->input('notice') ?: $user->notice,
                // 他のプロパティに対応する更新処理を追加する
            ]);

        } catch (\Exception $e) {
            // その他の例外が発生した場合の処理
            Log::error($e->getMessage()); // エラーメッセージをログに出力
            // エラーメッセージを返す
            return 'Error occurred.';
        }
    }

    public function uploadUserImage(Request $request)
    {
        try {
            $user = $request->user();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('user_images', 's3');

                // S3に保存された画像のURLを取得
                return Storage::disk('s3')->url($imagePath);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => '画像のアップロードに失敗しました。'], 500);
        }
    }
}
