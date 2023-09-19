<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/success', [App\Http\Controllers\CartController::class, 'success'])->name('success');
Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'success'])->name('register-success');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/products', [App\Http\Controllers\DashboardProductController::class, 'index'])->name('dashboard-products');
Route::get('/dashboard/products/create', [App\Http\Controllers\DashboardProductController::class, 'create'])->name('dashboard-products-create');
Route::get('/dashboard/products/{id}', [App\Http\Controllers\DashboardProductController::class, 'details'])->name('dashboard-product-details');

Route::get('/dashboard/transactions', [App\Http\Controllers\DashboardTransactionsController::class, 'index'])->name('dashboard-transactions');
Route::get('/dashboard/transactions/{id}', [App\Http\Controllers\DashboardTransactionsController::class, 'details'])->name('dashboard-transactions-details');
// Auth::routes();

Route::get('/dashboard/settings', [App\Http\Controllers\DashboardSettingsController::class, 'store'])->name('dashboard-settings');
Route::get('/dashboard/account', [App\Http\Controllers\DashboardSettingsController::class, 'account'])->name('dashboard-account');

//Middleware(['Auth','admin'])
Route::prefix('admin')
    ->namespace('admin')
    ->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
    });