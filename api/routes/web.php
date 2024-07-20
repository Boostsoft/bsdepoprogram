<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [App\Http\Controllers\Api\LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [App\Http\Controllers\Api\LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [App\Http\Controllers\Api\LoginController::class, 'logout'])->name('logout');

Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');


Route::get('/product-brand', [App\Http\Controllers\StoreFront\ProductBrand\IndexController::class, '__invoke']);
Route::get('/product-brand/add', [App\Http\Controllers\StoreFront\ProductBrand\StoreController::class, 'view']);
Route::post('/product-brand/add', [App\Http\Controllers\StoreFront\ProductBrand\StoreController::class, 'add'])->name('product-brand.add');
Route::get('/product-brand/edit/{id}', [App\Http\Controllers\StoreFront\ProductBrand\UpdateController::class, 'view']);
Route::put('/product-brand/{id}', [App\Http\Controllers\StoreFront\ProductBrand\UpdateController::class, 'edit'])->name('product-brand.edit');





Route::delete('/product-brand/{id}', [App\Http\Controllers\ProductBrand\DeleteController::class, '__invoke'])->name('admin.deleteProductBrand');
