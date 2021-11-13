<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::fallback(function () {
    return response()->json(['error' => 'Not Found!'], 404);
});
Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'user']);
});
Route::group(['middleware' => 'auth:api'], function () {
    Route::prefix('/')->group(function () {
        Route::apiResource('category', CategoryController::class);
        Route::apiResource('product', ProductController::class);
    });
});
