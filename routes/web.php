<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/workplace', [App\Http\Controllers\HomeController::class, 'workplace'])->name('workplace');
Route::get('/teaching', [App\Http\Controllers\HomeController::class, 'teaching'])->name('teaching');
Route::get('/behaviour', [App\Http\Controllers\HomeController::class, 'behaviour'])->name('behaviour');
Route::get('/reports', [App\Http\Controllers\HomeController::class, 'reports'])->name('reports');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
