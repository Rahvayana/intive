<?php

use App\Http\Controllers\API\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
    
    
    Route::get('/stocks', [AuthController::class, 'stocks']);
    Route::get('/stock', [AuthController::class, 'stock']);
    
    Route::post('/buy', [AuthController::class, 'buy']);

});
