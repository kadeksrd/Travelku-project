<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
// use auth
use Illuminate\Support\Facades\Auth;
// use logincontroller
use App\Http\Controllers\Auth\LoginController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/details/{slug}', [DetailsController::class, 'index'])
    ->name('details');


// checkout post : untuk memproses data saat join now 
Route::post('/checkout/{id}', [CheckoutController::class, 'process'])
    ->name('checkout_process')
    ->Middleware(['auth', 'verified']);

// checkout index
Route::get('/checkout/{id}', [CheckoutController::class, 'index'])
    ->name('checkout')
    ->Middleware(['auth', 'verified']);

// checkout create : untuk menambah orang selain kita 
Route::post('/checkout/create/{detail_id}', [CheckoutController::class, 'create'])
    ->name('checkout-create')
    ->Middleware(['auth', 'verified']);

// checkout remove
Route::get('/checkout/{detail_id}/remove', [CheckoutController::class, 'remove'])
    ->name('checkout-remove')
    ->Middleware(['auth', 'verified']);

// ceckout success
Route::get('/checkout/confirm/{id}', [CheckoutController::class, 'success'])
    ->name('checkout-success')
    ->Middleware(['auth', 'verified']);




//route post logout
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// prefix itu : untuk membuat satu route dalam satu group template atau satu url 
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth', 'verified', 'admin') //memanggil namespace admin biar ga perlu di nulis namespace admin lagi diatasnya
    ->group(function () {
        // '/' : admin/
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); //name: penamaan controllernya
        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
