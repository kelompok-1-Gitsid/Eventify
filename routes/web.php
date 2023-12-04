<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CateringController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DecorationController;
use App\Http\Controllers\transactionController;
use Illuminate\Session\Middleware\AuthenticateSession;

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

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/product', [productController::class, 'getAll']);
Route::get('/product/detail/{id}', [productController::class, 'showDetail'])->name('product.detail');

Route::middleware('auth')->group(function () {
    // Profile Update
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile', [ProfileController::class, 'avatar'])->name('profile.avatar');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Order
    Route::post('/order/product', [transactionController::class, 'store'])->name('order.product');
    Route::get('/order/pay', [transactionController::class, 'getDetail'])->name('order.list');
    Route::post('/order/pay', [transactionController::class, 'pay'])->name('order.pay');
    Route::get('/order/success', [transactionController::class, 'viewTransaction'])->name('transaction.transaction-success');
});


Route::redirect('admin', 'admin/vendor');

Route::prefix('admin')->middleware('auth','admin')->group(function () {
    Route::prefix('vendor')->group(function () {
        Route::get('/', function () {
            return view('admin.vendor');
        })->name('vendor');

        Route::resource('photo', PhotoController::class);
        Route::resource('video', VideoController::class);
        Route::resource('catering', CateringController::class);
        Route::resource('mua', MuaController::class);
        Route::resource('decoration', DecorationController::class);
    });


    Route::resource('user', CustomerController::class);

    Route::resource('info', InfoController::class);

});
Route::middleware('auth','vendor')->group(function(){
    Route::get('/vendor/dashboard', [VendorController::class, 'showDashboard'])->name('vendor.dashboard');
    Route::get('/vendor/profile', [VendorController::class, 'profile'])->name('vendor.profile');
    Route::get('/vendor/profile/update', [VendorController::class, 'edit'])->name('vendor.edit');
    Route::put('/vendor/profile/update', [VendorController::class, 'update'])->name('vendor.update');
    Route::get('vendor/transactions', [VendorController::class, 'transactions'])->name('vendor.transactions');
    Route::get('vendor/products', [VendorController::class, 'showProducts'])->name('vendor.product');
    Route::get('/products/create', [VendorController::class, 'create'])->name('product.create');
    Route::post('/products/store', [VendorController::class, 'store'])->name('product.store');
    Route::get('/products/{id}/edit', [VendorController::class, 'editProduct'])->name('product.edit');
    Route::put('/products/{id}', [VendorController::class, 'updateProduct'])->name('products.update');
    Route::delete('/products/{id}', [VendorController::class, 'destroyProduct'])->name('product.destroy');
});


Route::get('/auth/{provider}/redirect', [HomeController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [HomeController::class, 'callback']);

route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

require __DIR__ . '/auth.php';
