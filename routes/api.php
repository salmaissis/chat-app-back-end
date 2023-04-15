<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
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

// Route::get('messages', [\App\Http\Controllers\ChatController::class, 'index']);
Route::post('messages', [\App\Http\Controllers\ChatController::class, 'store']);
Route::post('signup', [\App\Http\Controllers\SignupController::class, 'store']);
Route::post('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('users', [\App\Http\Controllers\UserController::class, 'index']);
