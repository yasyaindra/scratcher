<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', function(){
    return redirect('/login');
});


Route::post('/register', [RegisterController::class, 'store']);
Route::get('/', [LandingController::class, 'index']);
Route::get('/about',[UserController::class, 'index']);
Route::get('/posts',[PostController::class, 'index']);
Route::get('/p/{post:slug}',[PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/c/{category:slug}',[CategoryController::class, 'show']);
Route::get('/u/{username}',[UserController::class, 'show']);

Route::get('/u/{username}', function(){
    return 'hello world';
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class);
