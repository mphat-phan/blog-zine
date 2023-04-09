<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\MatchUserPost;
use App\Http\Middleware\AuthUser;
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

Route::middleware([AuthUser::class])->group(function(){
    Route::get('/dashboard', function(){
        return view('pages.manage.dashboard');
    });

    // Show post list manage view
    Route::get('/posts/manage', [PostController::class, 'manage']);

    // Show post create view
    Route::get('/posts/create', [PostController::class, 'create']);

    Route::post('/posts', [PostController::class, 'store']);

    // Show post edit view
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware([MatchUserPost::class]);

    // Edit post
    Route::put('/posts/{post}', [PostController::class, 'update'])->middleware([MatchUserPost::class]);

    // Delete post
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware([MatchUserPost::class]);
});

