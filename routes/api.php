<?php

use App\Http\Controllers\DateJobController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\GirlsInfoController;
use App\Http\Controllers\LogDateJobController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function () {
    // 認証が必要なルートを定義
    Route::get('/user', [DashboardController::class, 'getUserInfo']);
    Route::get('/date_detail', [DashboardController::class, 'getDateDetail']);
    Route::get('/girls_list', [DateJobController::class, 'fetchGirlsList']);
    Route::post('/make_date_job', [DateJobController::class, 'makeDateJob']);
    Route::post('/post_comment', [DateJobController::class, 'postComment']);
    Route::get('/girls_info', [GirlsInfoController::class, 'fetchGirlsInfo']);
    Route::delete('/delete_girls_info', [GirlsInfoController::class, 'deleteGirlsInfo']);
    Route::put('/edit_girls_info', [GirlsInfoController::class, 'editGirlsInfo']);
    Route::get('/log_date_job', [LogDateJobController::class, 'fetchDateLog']);
    Route::get('/friendship', [FriendshipController::class, 'fetchFriendship']);
    Route::get('/friend_info', [FriendshipController::class, 'fetchFriendInfo']);
    Route::delete('/delete_friendship_status', [FriendshipController::class, 'deleteFriendshipStatus']);
    Route::get('/unfollowing_user', [FriendshipController::class, 'unfollowingUser']);
    Route::put('/put_friendship_status', [FriendshipController::class, 'putFriendshipStatus']);
    Route::post('/post_friendship_status', [FriendshipController::class, 'postFriendshipStatus']);
    Route::get('/user_profile', [UserProfileController::class, 'fetchUserProfile']);
    Route::delete('/delete_user', [UserProfileController::class, 'deleteUserProfile']);
    Route::put('/edit_user_profile', [UserProfileController::class, 'editUserProfile']);
    Route::post('/upload_user_image', [UserProfileController::class, 'uploadUserImage']);
});

// 認証不要なルート
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/email_validate', [AuthController::class, 'emailValidate']);
Route::get('/refresh_data', [AuthController::class, 'refreshData']);
