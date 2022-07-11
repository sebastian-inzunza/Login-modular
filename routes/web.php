<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registrercontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Logoutcontroller;
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

Route::get('/register',[Registrercontroller::class, 'show']);


Route::post('/register',[Registrercontroller::class, 'register']);

Route::get('/login',[LoginController::class, 'show']);

Route::post('/login',[LoginController::class, 'login']);

Route::get('/home',[Homecontroller::class, 'index']);

Route::get('/logout',[Logoutcontroller::class, 'logout']);