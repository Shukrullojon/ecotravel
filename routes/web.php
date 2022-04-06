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

Route::get('/', [\App\Http\Controllers\HomeController::class,'welcome'])->name('welcome');
Route::get('service',[\App\Http\Controllers\HomeController::class,'service'])->name('service');
Route::get('gallery',[\App\Http\Controllers\HomeController::class,'gallery'])->name('gallery');
Route::get('about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth'],'prefix' => 'admin'], function() {
    Route::get('/',[\App\Http\Controllers\Admin\MainController::class,'index'])->name('adminIndex');
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
});
