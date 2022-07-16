<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\RawController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WipController;
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


Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/login', [AuthController::class,'login_view'])->name('login-view');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');


Route::get('/raws', [RawController::class,'index'])->name('raw.index');
Route::get('/create-raw', [RawController::class,'create'])->name('raw.create');
Route::post('/raw', [RawController::class,'store'])->name('raw.store');

Route::get('/wips', [WipController::class,'index'])->name('wip.index');
Route::get('/create-wip', [WipController::class,'create'])->name('wip.create');
Route::get('/wip/{code}', [WipController::class,'show'])->name('wip.show');


Route::get('/finishes', [FinishController::class,'index'])->name('finish.index');
Route::get('/finish/{code}', [FinishController::class,'show'])->name('finish.show');

Route::get('/admins', [AdminController::class,'index'])->name('admin.index');

Route::get('/customers', [UserController::class,'index'])->name('user.index');

Route::get('/roles', [RoleController::class,'index'])->name('role.index');

Route::get('/stocks', [StockController::class,'index'])->name('stock.index');
Route::get('/create-stock', [StockController::class,'create'])->name('stock.create');
Route::post('/stock', [StockController::class,'store'])->name('stock.store');
Route::get('/list-stock/{table}', [StockController::class,'stock_list'])->name('stock.list');
Route::get('/detail-stock/{code}/{table}', [StockController::class,'stock_detail'])->name('stock.detail');