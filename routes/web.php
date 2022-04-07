<?php

use Illuminate\Support\Facades\Route;
// Admin
use App\Http\Controllers\Admin\Dashboard as DashboardAdmin;
use App\Http\Controllers\Admin\AdminController as UserAdmin;
use App\Http\Controllers\Admin\CustomerController as CustomersAdmin;
use App\Http\Controllers\Admin\PengelolaPasarController as PengelolaPasarAdmin;
use App\Http\Controllers\Admin\PemdaController as PemdaAdmin;
use App\Http\Controllers\Admin\PedagangController as PedagangAdmin;
use App\Http\Controllers\Admin\DriverController as DriverAdmin;
use App\Http\Controllers\Admin\KategoriProdukController as KategoriProdukAdmin;
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
Route::get('admin/login', [AuthController::class, 'login_admin'])->middleware('guest')->name('login');
Route::post('admin/login', [AuthController::class, 'login_admin_handler']);

// logout
Route::get('logout',[AuthController::class, 'logout']);

// Admin
Route::middleware('auth:admin')->prefix('admin')->group(function () {
  
    Route::get('/', [DashboardAdmin::class, 'index']);

    Route::prefix('pasar')->group(function() {
        // pengelola pasar
        Route::get('pengelola', [PengelolaPasarAdmin::class, 'index']);
        Route::post('pengelola', [PengelolaPasarAdmin::class, 'store']);
        Route::post('pengelola/edit', [PengelolaPasarAdmin::class, 'edit']);
        Route::put('pengelola', [PengelolaPasarAdmin::class, 'update']);
        Route::delete('pengelola', [PengelolaPasarAdmin::class, 'destroy']);

        // Data Pasar
    });

    Route::prefix('users')->group(function() {
        // Data Admin
        Route::get('admin', [UserAdmin::class,'index']);
        Route::post('admin', [UserAdmin::class,'store']);
        Route::post('admin/edit', [UserAdmin::class,'edit']);
        Route::put('admin', [UserAdmin::class,'update']);
        Route::delete('admin', [UserAdmin::class,'destroy']);

        // Data Customer
        Route::get('customers', [CustomersAdmin::class, 'index']);
        Route::post('customers', [CustomersAdmin::class, 'store']);
        Route::post('customers/edit', [CustomersAdmin::class, 'edit']);
        Route::put('customers', [CustomersAdmin::class, 'update']);
        Route::delete('customers', [CustomersAdmin::class, 'destroy']);

        // Data Pemda
        Route::get('pemda', [PemdaAdmin::class, 'index']);
        Route::post('pemda', [PemdaAdmin::class, 'store']);
        Route::post('pemda/edit', [PemdaAdmin::class, 'edit']);
        Route::put('pemda', [PemdaAdmin::class, 'update']);
        Route::delete('pemda', [PemdaAdmin::class, 'destroy']);

        // Data Pedagang
        Route::get('pedagang', [PedagangAdmin::class, 'index']);
        Route::post('pedagang', [PedagangAdmin::class, 'store']);
        Route::post('pedagang/edit', [PedagangAdmin::class, 'edit']);
        Route::put('pedagang', [PedagangAdmin::class, 'update']);
        Route::delete('pedagang', [PedagangAdmin::class, 'destroy']);

        // Data Driver
        Route::get('driver', [DriverAdmin::class, 'index']);
        Route::post('driver', [DriverAdmin::class, 'store']);
        Route::post('driver/edit', [DriverAdmin::class, 'edit']);
        Route::put('driver', [DriverAdmin::class, 'update']);
        Route::delete('driver', [DriverAdmin::class, 'destroy']);
    });

    Route::prefix('produk')->group(function() {
        // Kategori Produk
        Route::get('kategori', [KategoriProdukAdmin::class, 'index']);
        Route::post('kategori', [KategoriProdukAdmin::class, 'store']);
        Route::post('kategori/edit', [KategoriProdukAdmin::class, 'edit']);
        Route::put('kategori', [KategoriProdukAdmin::class, 'update']);
        Route::delete('kategori', [KategoriProdukAdmin::class, 'destroy']);
    });
});