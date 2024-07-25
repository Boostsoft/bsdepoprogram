<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [App\Http\Controllers\Api\LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [App\Http\Controllers\Api\LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [App\Http\Controllers\Api\LoginController::class, 'logout'])->name('logout');

Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');


Route::prefix('product-brand')->group(function () {
    Route::get('', [App\Http\Controllers\StoreFront\ProductBrand\IndexController::class, 'list'])->name('product-brand.list');
    Route::get('/add', [App\Http\Controllers\StoreFront\ProductBrand\StoreController::class, 'view'])->name('product-brand.add.view');
    Route::post('/add', [App\Http\Controllers\StoreFront\ProductBrand\StoreController::class, 'add'])->name('product-brand.add');
    Route::get('/edit/{id}', [App\Http\Controllers\StoreFront\ProductBrand\UpdateController::class, 'view'])->name('product-brand.edit.view');
    Route::put('/{id}', [App\Http\Controllers\StoreFront\ProductBrand\UpdateController::class, 'edit'])->name('product-brand.edit');
    Route::delete('/delete', [App\Http\Controllers\StoreFront\ProductBrand\DeleteController::class, 'delete'])->name('product-brand.delete');
});

Route::prefix('product')->group(function () {
    Route::get('', [App\Http\Controllers\StoreFront\Product\IndexController::class, 'list'])->name('product.list');
    Route::get('/add', [App\Http\Controllers\StoreFront\Product\StoreController::class, 'view'])->name('product.add.view');
    Route::post('/add', [App\Http\Controllers\StoreFront\Product\StoreController::class, 'add'])->name('product.add');
    Route::get('/edit/{id}', [App\Http\Controllers\StoreFront\Product\UpdateController::class, 'view'])->name('product.edit.view');
    Route::put('/{id}', [App\Http\Controllers\StoreFront\Product\UpdateController::class, 'edit'])->name('product.edit');
    Route::delete('/delete', [App\Http\Controllers\StoreFront\Product\DeleteController::class, 'delete'])->name('product.delete');
});

