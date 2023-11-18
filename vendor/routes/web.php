<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AuthController;
use PHPUnit\Framework\Attributes\Group;


Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

route::group(['middleware' => 'auth'], function(){
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [VendorController::class, 'index'])->name('vendor.index');
    Route::get('/vendor', [VendorController::class, 'profile'])->name('vendor.profile');
    Route::get('/orders', [VendorController::class, 'orders'])->name('vendor.orders');
    Route::get('/AddProduct', [VendorController::class, 'AddProduct'])->name('vendor.AddProduct');
    Route::get('/MyProduct', [VendorController::class, 'MyProduct'])->name('vendor.MyProduct');
    Route::get('/TotalOrders', [VendorController::class, 'TotalOrders'])->name('vendor.TotalOrders');
    Route::get('/OrderProcess', [VendorController::class, 'OrderProcess'])->name('vendor.OrderProcess');
    Route::get('/OrdersDone', [VendorController::class, 'OrdersDone'])->name('vendor.OrdersDone');

});






