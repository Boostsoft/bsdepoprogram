<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('admin')->group(function () {
    Route::post('/auth/login', [LoginController::class, '__invoke']);
});

Route::prefix('user')->group(function () {
    Route::get('index', [IndexController::class, '__invoke']);
    Route::post('store',[StoreController::class,'__invoke']);

});
