<?php

use App\Http\Controllers\DateJobController;
use App\Http\Controllers\GirlsInfoController;
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
    Route::get('/girls_info', [GirlsInfoController::class, 'fetchGirlsInfo']);
    Route::delete('/delete_girls_info', [GirlsInfoController::class, 'deleteGirlsInfo']);
    Route::put('/edit_girls_info', [GirlsInfoController::class, 'editGirlsInfo']);
});

// 認証不要なルート
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
