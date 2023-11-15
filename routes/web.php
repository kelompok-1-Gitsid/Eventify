<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/status', function () {
    return view('status');
});
Route::get('/order', function () {
    return view('order');
});

// Route Auth
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login/auth', [AuthController::class], 'store');
