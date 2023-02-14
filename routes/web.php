<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;

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

Route::view('/', 'template.master');

Route::resource('outlet', OutletController::class);
Route::resource('paket', PaketController::class);


Route::get('register', [RegisterController::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register.proses')->middleware('guest');

Route::get('login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest');

Route::get('logout', [LoginController::class, 'logout'])->name('logout.admin');


Route::get('dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin')->middleware('auth',);
Route::get('dashboard/kasir', [DashboardController::class, 'kasir'])->name('dashboard.kasir')->middleware('auth',);
Route::get('dashboard/owner', [DashboardController::class, 'owner'])->name('dashboard.owner')->middleware('auth');
Route::view('error/403', 'error.403')->name('error.403');