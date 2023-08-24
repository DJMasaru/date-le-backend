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
        $me = $user['id'];

        //ステータスとして、statueが0は未アクション、1はフォロー中、2はフォローリクエストとする。

        //自分がフォローしてるユーザーとフォローリクエストを飛ばしている相手を表示
        $followingID = Friendship::where('user_id', $user['id'])
            ->where('status', 1)
            ->pluck('followed_user_id');

        $followingRequestID=Friendship::where('user_id',$user['id'])
            ->where('status',2)
            ->pluck('followed_user_id');

        //フォローされてる相手とフォローリクエストを飛ばしてきている相手を表示
        $followedID=Friendship::where('followed_user_id',$user['id'])
            ->where('status',1)
            ->pluck('user_id');

        $followedRequestID=Friendship::where('followed_user_id',$user['id'])
            ->where('status',2)
            ->pluck('user_id');

        if(!$request["suggestion"]){
            $followingUser=User::whereIn('id',$followingID)
                ->get();
            $followingRequestUser=User::whereIn('id',$followingRequestID)
                ->get();
            $followedUser=User::whereIn('id',$followedID)
                ->get();
            $followedRequestUser=User::whereIn('id',$followedRequestID)
                ->get();

            return response()->json([
                'followingUser' => $followingUser,
                'requestingUser' => $followingRequestUser,
                'followedUser' => $followedUser,
                'requestedUser' => $followedRequestUser
            ]);

        }else{

            //ユーザーをサジェスト検索する
            $searchText = $request->input('searchText');

            //自身のアカウントにフォロー・フォロワーなど何らかの接点がある人
            $activeUsers = collect([$me])
                ->concat($followingID)
                ->concat($followingRequestID)
                ->concat($followedID)
                ->concat($followedRequestID)
                ->unique()
                ->values();

            //全く無知の人
            $strangerIds = User::whereNotIn('id', $activeUsers)
                ->pluck('id');
            $stranger = User::whereIn('id', $strangerIds)
                ->where('name', 'LIKE', '%' . $searchText . '%')
                ->select('id','name','age','image_url')
                ->get();
            $strangerWithStatus = $stranger->map(function ($user) {
                $user->status = 'stranger'; // 新しいカラムに値をセット
                return $user;
            });

            return response()->json([
                'strangerUser' => $strangerWithStatus,
            ]);
        }
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

    public function unfollowingUser(Request $request)
    {
        $user = $request->user();
        $me = $user['id'];
        $searchText = $request->input('searchText'); // 検索テキストを取得

        $followingUsersId = Friendship::where('user_id',$me)->where('status',1)->pluck('followed_user_id');
        $followingUsers = User::whereIn('id', $followingUsersId)->where('name', 'LIKE', '%' . $searchText . '%')->select('id','name','age','image_url')->get(); // nameカラムで曖昧検索->select('id', 'name', 'age', 'image_url')->get();
        $followingUsersWithStatus = $followingUsers->map(function ($user) {
            $user->status = 'following'; // 新しいカラムに値をセット
            return $user;
        });

        $requestingUsersId = Friendship::where('user_id',$me)->where('status',2)->pluck('followed_user_id');
        $requestingUsers = User::whereIn('id',$requestingUsersId)->where('name', 'LIKE', '%' . $searchText . '%')->select('id','name','age','image_url')->get();
        $requestingUsersWithStatus = $requestingUsers->map(function ($user) {
            $user->status = 'requesting'; // 新しいカラムに値をセット
            return $user;
        });

        $combinedUsers = collect([$me])->concat($followingUsersId)->concat($requestingUsersId)->unique();
        Log::debug($combinedUsers);

        $unfollowingUsers = User::whereNotIn('id',$combinedUsers)->where('name', 'LIKE', '%' . $searchText . '%')->select('id','name','age','image_url')->get();
        $unfollowingUsersWithStatus = $unfollowingUsers->map(function ($user) {
            $user->status = 'unfollow'; // 新しいカラムに値をセット
            return $user;
        });
        Log::debug($unfollowingUsers);
        $result = $followingUsersWithStatus->concat($requestingUsersWithStatus)->concat($unfollowingUsersWithStatus);

        return response()->json($result);
    }

}
