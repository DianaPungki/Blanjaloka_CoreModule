<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homepage;

// customer
use App\Http\Controllers\Customer\Dashboard as DashboardCustomer;

// Admin
use App\Http\Controllers\Admin\Dashboard as DashboardAdmin;
use App\Http\Controllers\Admin\AdminController as UserAdmin;
use App\Http\Controllers\Admin\CustomerController as CustomersAdmin;
use App\Http\Controllers\Admin\PengelolaPasarController as PengelolaPasarAdmin;
use App\Http\Controllers\Admin\PemdaController as PemdaAdmin;
use App\Http\Controllers\Admin\PedagangController as PedagangAdmin;
use App\Http\Controllers\Admin\DriverController as DriverAdmin;
use App\Http\Controllers\Admin\ProdukKategoriController as ProdukKategoriAdmin;
use App\Http\Controllers\Admin\ProdukController as ProdukAdmin;
use App\Http\Controllers\Admin\PasarController as PasarAdmin;
use App\Http\Controllers\Admin\TokoController as TokoAdmin;
use App\Http\Controllers\Admin\GudangController as GudangAdmin;
// Pengelola
use App\Http\Controllers\PengelolaPasar\Dashboard as DashboardPengelola;
use App\Http\Controllers\PengelolaPasar\TokoController as TokoPengelola;
use App\Http\Controllers\PengelolaPasar\ProdukKategoriController as ProdukKategoriPengelola;
use App\Http\Controllers\PengelolaPasar\PedagangController as PedagangPengelola;
use App\Http\Controllers\PengelolaPasar\ProdukController as ProdukPengelola;
// Pemda
use App\Http\Controllers\Pemda\Dashboard as DashboardPemda;

use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', [Homepage::class, 'index']);

// login customer
Route::get('login', [AuthController::class, 'login_customer'])->middleware('guest')->name('login');
Route::post('login', [AuthController::class, 'login_customer_handler'])->middleware('guest')->name('login');

// register customer
Route::get('/register', [Auth::class, 'register_customer'])->middleware('guest')->name('register');
Route::post('/register', [Auth::class, 'register_handler'])->middleware('guest')->name('register');

// login admin
Route::get('admin/login', [AuthController::class, 'login_admin'])->middleware('guest')->name('login_admin');
Route::post('admin/login', [AuthController::class, 'login_admin_handler']);

// login pengelola pasar
Route::get('pengelola/login', [AuthController::class, 'login_pengelola'])->middleware('guest')->name('login_pengelolapasar');
Route::post('pengelola/login', [AuthController::class, 'login_pengelola_handler']);

// login pedagang
Route::get('pedagang/login', [AuthController::class, 'login_pedagang'])->middleware('guest')->name('login_pedagang');
Route::post('pedagang/login', [AuthController::class, 'login_pedagang_handler']);

// login pemda
Route::get('pemda/login', [AuthController::class, 'login_pemda'])->middleware('guest')->name('login_pemda');
Route::post('pemda/login', [AuthController::class, 'login_pemda_handler']);

// logout
Route::get('logout',[AuthController::class, 'logout']);

// lokasi
Route::post('location/getkabupaten', [\App\Http\Controllers\LocationController::class, 'kabupaten']);
Route::post('location/getkecamatan', [\App\Http\Controllers\LocationController::class, 'kecamatan']);

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
        Route::get('/', [PasarAdmin::class, 'index']);
        Route::get('add', [PasarAdmin::class, 'create']);
        Route::post('addhandler', [PasarAdmin::class, 'store']);
        Route::get('edit/{id}',[PasarAdmin::class, 'edit']);
        Route::post('update', [PasarAdmin::class, 'update']);
        Route::delete('/', [PasarAdmin::class, 'destroy']);

        // Jam Pasar
        Route::get('jam/{id}', [PasarAdmin::class, 'jamoperasional']);
        Route::post('jam/insert', [PasarAdmin::class, 'insertjam']);
        Route::post('jam/get', [PasarAdmin::class, 'getjam']);
        Route::post('jam/update', [PasarAdmin::class, 'updatejam']);
        Route::post('jam/delete', [PasarAdmin::class, 'deletejam']);

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
        Route::post('pedagang/update', [PedagangAdmin::class, 'update']);
        Route::delete('pedagang', [PedagangAdmin::class, 'destroy']);

        // Data Driver
        Route::get('driver', [DriverAdmin::class, 'index']);
        Route::post('driver', [DriverAdmin::class, 'store']);
        Route::post('driver/edit', [DriverAdmin::class, 'edit']);
        Route::put('driver', [DriverAdmin::class, 'update']);
        Route::delete('driver', [DriverAdmin::class, 'destroy']);
    });

    Route::prefix('toko')->group(function() {
        // Data Toko
        Route::get('/', [TokoAdmin::class, 'index']);
        Route::get('/json', [TokoAdmin::class, 'datatokojson']);
        // jam
        Route::get('jam/{id}', [TokoAdmin::class, 'jamoperasional']);
        Route::post('jam/insert', [TokoAdmin::class, 'insertjam']);
        Route::post('jam/get', [TokoAdmin::class, 'getjam']);
        Route::post('jam/update', [TokoAdmin::class, 'updatejam']);
        Route::post('jam/delete', [TokoAdmin::class, 'deletejam']);
        Route::put('status/nonaktif', [TokoAdmin::class, 'nonaktif']);
        Route::put('status/aktif', [TokoAdmin::class, 'aktif']);

    });

    Route::prefix('produk')->group(function() {
        // Kategori Produk
        Route::get('kategori', [ProdukKategoriAdmin::class, 'index']);
        Route::post('kategori', [ProdukKategoriAdmin::class, 'store']);
        Route::post('kategori/edit', [ProdukKategoriAdmin::class, 'edit']);
        Route::put('kategori', [ProdukKategoriAdmin::class, 'update']);
        Route::delete('kategori', [ProdukKategoriAdmin::class, 'destroy']);
        
        // Data Produk
        Route::get('/', [ProdukAdmin::class, 'index']);
        Route::get('add', [ProdukAdmin::class, 'create']);
        Route::post('addhandler', [ProdukAdmin::class, 'store']);
        Route::get('edit/{id}',[ProdukAdmin::class, 'edit']);
        Route::post('update', [ProdukAdmin::class, 'update']);
        Route::delete('/', [ProdukAdmin::class, 'destroy']);
        Route::post('delete/foto', [ProdukAdmin::class, 'update']);
        Route::put('status/nonaktif', [ProdukAdmin::class, 'nonaktif']);
        Route::put('status/aktif', [ProdukAdmin::class, 'aktif']);

        Route::get('gudang', [GudangAdmin::class, 'index']);
    });
});

Route::middleware('auth:pengelola')->prefix('pengelola')->group(function() {
    Route::get('/', [DashboardPengelola::class, 'index']);

     // Jam Pasar
    Route::prefix('jam')->group(function() {
         Route::post('insert', [DashboardPengelola::class, 'insertjam']);
         Route::post('get', [DashboardPengelola::class, 'getjam']);
         Route::post('update', [DashboardPengelola::class, 'updatejam']);
         Route::post('delete', [DashboardPengelola::class, 'deletejam']);
    });

    Route::prefix('users')->group(function() {
        // Data Pedagang
        Route::get('pedagang', [PedagangPengelola::class, 'index']);
        Route::post('pedagang', [PedagangPengelola::class, 'store']);
        Route::post('pedagang/edit', [PedagangPengelola::class, 'edit']);
        Route::post('pedagang/update', [PedagangPengelola::class, 'update']);
        Route::delete('pedagang', [PedagangPengelola::class, 'destroy']);
        Route::put('pedagang/nonaktif', [PedagangPengelola::class, 'nonaktif']);
        Route::put('pedagang/aktif', [PedagangPengelola::class, 'aktif']);

        // Data Driver
        Route::get('driver', [DriverAdmin::class, 'index']);
        Route::post('driver', [DriverAdmin::class, 'store']);
        Route::post('driver/edit', [DriverAdmin::class, 'edit']);
        Route::put('driver', [DriverAdmin::class, 'update']);
        Route::delete('driver', [DriverAdmin::class, 'destroy']);
    });

    Route::prefix('toko')->group(function() {
        Route::get('/', [TokoPengelola::class, 'index']);
        Route::get('/json', [TokoPengelola::class, 'datatokojson']);
        // jam
        Route::get('jam/{id}', [TokoPengelola::class, 'jamoperasional']);
        Route::post('jam/insert', [TokoPengelola::class, 'insertjam']);
        Route::post('jam/get', [TokoPengelola::class, 'getjam']);
        Route::post('jam/update', [TokoPengelola::class, 'updatejam']);
        Route::post('jam/delete', [TokoPengelola::class, 'deletejam']);
        Route::post('status', [TokoPengelola::class, 'updatestatustoko']);
    });

    Route::prefix('produk')->group(function() {
        // Kategori Produk
        Route::get('kategori', [ProdukKategoriPengelola::class, 'index']);
        Route::post('kategori', [ProdukKategoriPengelola::class, 'store']);
        Route::post('kategori/edit', [ProdukKategoriPengelola::class, 'edit']);
        Route::put('kategori', [ProdukKategoriPengelola::class, 'update']);
        Route::delete('kategori', [ProdukKategoriPengelola::class, 'destroy']);
        
        // Data Produk
        Route::get('/', [ProdukPengelola::class, 'index']);
        Route::get('add', [ProdukPengelola::class, 'create']);
        Route::post('addhandler', [ProdukPengelola::class, 'store']);
        Route::get('edit/{id}',[ProdukPengelola::class, 'edit']);
        Route::post('update', [ProdukPengelola::class, 'update']);
        Route::delete('/', [ProdukPengelola::class, 'destroy']);
        Route::post('delete/foto', [ProdukPengelola::class, 'update']);

        Route::put('status/nonaktif', [ProdukPengelola::class, 'nonaktif']);
        Route::put('status/aktif', [ProdukPengelola::class, 'aktif']);

    });
    
});

Route::middleware('auth:pemda')->prefix('pemda')->group(function() {
    Route::get('/', [DashboardPemda::class, 'index']);

    
});

Route::middleware('auth:customer')->prefix('/')->group(function() {
    Route::get('/index', [DashboardCustomer::class, 'index']);
    Route::post('pasar/detail', [DashboardCustomer::class, 'getdetailpasar']);
Route::post('pasar/terapkan', [DashboardCustomer::class, 'terapkanpasar']);
});