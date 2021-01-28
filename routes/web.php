<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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
	Route::get('/', [HomeController::class, 'index']);
	Auth::routes();
	Route::get('/home', [HomeController::class, 'index'])->name('index');
});

Route::get('{slug}', [ProfileController::class, 'show'])->name('show');
Route::get('/changeuser', [HomeController::class, 'changeSlugUsers']);




