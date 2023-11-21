<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;




Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});



route::group(['middleware' => 'auth'], function(){
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('index');
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
    Route::post('/update-status/{id}/{status}', 'OrderController@updateStatus')->name('updateStatus');
    Route::get('/MyProduct', [ProductController::class, 'index'])->name('product.index');
    Route::get('/AddProduct', [ProductController::class, 'create'])->name('product.AddProduct');
    Route::post('/AddProduct', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

});






