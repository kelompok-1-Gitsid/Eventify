<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;


Route::get('/', [VendorController::class, 'index'])->name('vendor.index');
Route::get('/vendor', [VendorController::class, 'profile'])->name('vendor.profile');
Route::get('/orders', [VendorController::class, 'orders'])->name('vendor.orders');
Route::get('/AddProduct', [VendorController::class, 'AddProduct'])->name('vendor.AddProduct');
Route::get('/MyProduct', [VendorController::class, 'MyProduct'])->name('vendor.MyProduct');
Route::get('/TotalOrders', [VendorController::class, 'TotalOrders'])->name('vendor.TotalOrders');
Route::get('/OrderProcess', [VendorController::class, 'OrderProcess'])->name('vendor.OrderProcess');
Route::get('/OrdersDone', [VendorController::class, 'OrdersDone'])->name('vendor.OrdersDone');






