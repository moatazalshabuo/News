<?php

use App\Http\Controllers\CatogryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('new/{id}',[HomeController::class,"news"])->name("news-single");
Route::get('catogry/{id}',[HomeController::class,"catogry"])->name("cat-single");


Route::resource('users', UserController::class)->middleware('auth');

Route::resource("catogries",CatogryController::class)->middleware('auth');

Route::resource("news",NewsController::class)->middleware('auth');
