<?php

namespace App\Http\Controllers;

use AWS\CRT\Log;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            // 認証に成功した場合の処理
            $user = User::where('email', $request['email'])->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        } else {
            // 認証に失敗した場合の処理
            return response()->json([
                'message' => 'ログインに失敗しました。入力情報を確認してください。'
            ], 401);
        }
    }

    public function emailValidate(Request $request)
    {
        $duplicate = User::where('email', $request['email'])->first();
        if ($duplicate) {
            return response()->json(['message' => 'duplicated']);
        } else {
            return response()->json(['message' => 'non-duplicated']);
        }
    }

    public function refreshData(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('password_reset_tokens')->truncate();
        DB::table('failed_jobs')->truncate();
        DB::table('personal_access_tokens')->truncate();
        DB::table('girls_profiles')->truncate();
        DB::table('date_jobs')->truncate();
        DB::table('comment_on_date_jobs')->truncate();
        DB::table('friendships')->truncate();
        DB::table('log_date_jobs')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Artisan::call('db:seed');

        return response()->json(['message' => 'リフレッシュしました。']);
    }
}
