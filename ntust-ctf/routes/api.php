<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("/v1")->group(function () {
    Route::prefix("/user")->group(function () {
        Route::post("/login", [UserController::class, "login"]); // 登入
        Route::get("/logout", [UserController::class, "logout"])
            ->middleware('auth:api'); // 登出
        Route::any("/register", [UserController::class, "register"]); // 註冊
    });

    Route::middleware("auth:api")->group(function () {
        Route::prefix("/manage")->group(function () {
            Route::get("/upload", [ServiceController::class]); // 上傳檔案
            Route::prefix("/ben")->group(function() {
                Route::get("/", [ServiceController::class, "get_blocked_member"]); // ben 人
                Route::put("/", [ServiceController::class, "block_member"]); // ben 人
            });
            Route::prefix("/reserve")->group(function () {
                Route::patch("/", [ServiceController::class, 'get_all_reserved']); // 取得所有已經預約的房間
                Route::get("/", [ServiceController::class, 'get_reserved_room']); // 取得已經預約的房間
                Route::post("/", [ServiceController::class, 'reserve_room']); // 預約
                Route::get("/{y}-{m}-{d}", [ServiceController::class, 'get_reserved_room_by_date'])
                    ->where(["y" => "[0-9]+", "m" => "[0-9]+", "d" => "[0-9]+"])
                    ->withoutMiddleware("auth:api"); // 依照日期取得現在已經預約的房間
                Route::get("/{id}/password", [ServiceController::class, 'get_reserved_password'])->where([
                    "id" => ".*"
                ]); // 取得密碼
                Route::delete("/{id}", [ServiceController::class, 'cancel_reserve']); // 取消預約
                Route::any("/wang_zheng_hong", [UserController::class, "wang_zheng_hong"]); // 芷安的傑作
            })->middleware("auth:api");
        });
    });
});
