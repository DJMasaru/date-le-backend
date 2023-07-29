<?php

namespace App\Http\Controllers;

use App\Models\Friendship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FriendshipController extends Controller
{
    public function fetchFriendship(Request $request)
    {

        $user = $request->user();

        //ステータスとして、statueが0は未アクション、1はフォロー中、2はフォローリクエストとする。

        //自分がフォローしてるユーザーとフォローリクエストを飛ばしている相手を表示
        $followingID = Friendship::where('user_id', $user['id'])
            ->where('status', 1)
            ->pluck('followed_user_id');
        $followingUser=User::whereIn('id',$followingID)
            ->get();

        $followingRequestID=Friendship::where('user_id',$user['id'])
            ->where('status',2)
            ->pluck('followed_user_id');
        $followingRequestUser=User::whereIn('id',$followingRequestID)
            ->get();

        //フォローされてる相手とフォローリクエストを飛ばしてきている相手を表示
        $followedID=Friendship::where('followed_user_id',$user['id'])
            ->where('status',1)
            ->pluck('user_id');
        $followedUser=User::whereIn('id',$followedID)
            ->get();

        $followedRequestID=Friendship::where('followed_user_id',$user['id'])
            ->where('status',2)
            ->pluck('user_id');
        $followedRequestUser=User::whereIn('id',$followedRequestID)
            ->get();


        return response()->json([
            'followingUser' => $followingUser,
            'requestingUser' => $followingRequestUser,
            'followedUser' => $followedUser,
            'requestedUser' => $followedRequestUser
        ]);


    }

    public function fetchFriendInfo(Request $request)
    {
        return User::where('id',$request['id'])->first();
    }

    public function deleteFriendshipStatus(Request $request)
    {
        $user = $request->user();

        //ステータスがfollowingとrequestingのもの、ボタン表示「相互」が押下されたら削除処理を行う
        if ($request['status'] === 'following' || $request['status'] ==='requesting'|| $request['action'] ==='相互'||$request['action'] ==='申請中') {
            Friendship::where('user_id', $user->id)
                ->where('followed_user_id', $request['id'])
                ->delete();
        }
    }

    public function putFriendshipStatus(Request $request)
    {
        $user = $request->user();

        //相手側からフォロー申請をもらっているときにボタンに対して許可を行う
        if ($request['action'] ==='許可') {
            $requestedFriendship = Friendship::where('followed_user_id', $user->id)
                ->where('user_id', $request['id'])
                ->first();
            if ($requestedFriendship) {
                try {
                    $requestedFriendship->status = 1;
                    $requestedFriendship->save();
//                    return response()->json(['message' => '編集が完了しました']);
                } catch (\Exception $e) {
                    // エラーが発生した場合の処理
//                    return response()->json(['message' => '編集に失敗しました。エラー：' . $e->getMessage()]);
                }
            }
        }
    }

    public function postFriendshipStatus(Request $request)
    {
        $user = $request->user();
        if($request['action'] ==='追加'){
        try {
            Friendship::create([
                'user_id' => $user->id,
                'followed_user_id' => $request['id'],
                'status' => 2,
            ]);
            } catch (\Exception $e) {
                // その他の例外が発生した場合の処理
                Log::error($e->getMessage()); // エラーメッセージをログに出力
                // エラーメッセージを返す
    //                return 'Error occurred.';
            }
       }
    }
}
