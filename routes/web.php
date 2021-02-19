<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;


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

Route::group(['middleware' => 'web'], function() {
	Auth::routes();
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('index');
// Profile

Route::get('/changeuser', [HomeController::class, 'changeSlugUsers']);

// Posts
Route::post('/post', [PostController::class, 'store'])->name('store.post');
Route::get('/posts', [PostController::class, 'show'])->middleware('auth')->name('show.posts');
Route::get('/post/new_post', [PostController::class, 'create'])->name('create.post');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{id}', [PostController::class, 'update'])->name('post.update');


Route::get('/user/{slug}', [ProfileController::class, 'show'])->middleware('auth')->name('profile.show');
