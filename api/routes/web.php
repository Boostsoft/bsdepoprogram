<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [App\Http\Controllers\Api\LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [App\Http\Controllers\Api\LoginController::class, 'login'])->name('login.submit');

Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index']);
