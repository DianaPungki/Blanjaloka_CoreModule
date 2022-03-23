<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard as DashboardAdmin;

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

// Admin
Route::prefix('admin')->group(function () {
  
    Route::get('/home', [DashboardAdmin::class, 'index'])->name('admin.home');
});