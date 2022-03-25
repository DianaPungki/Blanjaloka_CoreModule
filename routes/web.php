<?php

use Illuminate\Support\Facades\Route;
// Admin
use App\Http\Controllers\Admin\Dashboard as DashboardAdmin;
use App\Http\Controllers\Admin\CustomerController as CustomersAdmin;
use App\Http\Controllers\Admin\PasarController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

// login admin
Route::get('admin/login', [AuthController::class, 'login_pengelola'])->middleware('guest')->name('login');
Route::post('admin/login', [AuthController::class, 'login_pengelola_handler']);

// logout
Route::get('logout',[AuthController::class, 'logout']);

// Admin
Route::middleware('auth:admin')->prefix('admin')->group(function () {
  
    Route::get('/', [DashboardAdmin::class, 'index']);

    Route::prefix('pasar')->group(function() {
        Route::get('pengelola', [PasarController::class, 'pengelolapasar']);

    });

    Route::prefix('users')->group(function() {
        // Data Customer
        Route::get('customers', [CustomersAdmin::class, 'index']);
    });
});