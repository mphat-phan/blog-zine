<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index']);

Route::get('/posts',[PostController::class, 'index']);
Route::get('/post/{slug}/{id}',[PostController::class, 'show']);

Route::get('/sign-in',[UserController::class, 'signIn']);
Route::post('/sign-in',[UserController::class, 'login']);

Route::get('/sign-up',[UserController::class, 'signUp']);
Route::post('/sign-up',[UserController::class, 'store']);

Route::post('/logout',[UserController::class, 'logout']);