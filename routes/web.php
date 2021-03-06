<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;


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

Route::get('/', [PagesController::class, 'pocetna']);
Route::get('/onama', [PagesController::class, 'onama']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts','App\Http\Controllers\PostsController');



Route::prefix('admin')->middleware(['auth','auth.isAdmin'])->name('admin.')->group(function(){
    Route::resource('/users', UserController::class);
    Route::get('/search', [UserController::class, 'search']);
});
