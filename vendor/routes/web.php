<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\OrdersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/vendor', [VendorController::class, 'profile'])->name('vendor.profile');
Route::get('/dashboard', [VendorController::class, 'index'])->name('vendor.index');



Route::get('/', function () {
    return view('dashboard');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/AddProduct', function () {
    return view('AddProduct');
});
Route::get('/profile', function () {
    return view('profile');
});


