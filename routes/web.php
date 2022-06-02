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

Route::get('home', function () {
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\IndexController::class, 'test']);
Route::get('gallery', [App\Http\Controllers\IndexController::class, 'gallery']);
Route::get('digitalPrinting', [App\Http\Controllers\IndexController::class, 'digital']);
Route::get('largeFormatPrinting', [App\Http\Controllers\IndexController::class, 'large']);
Route::get('service', [App\Http\Controllers\IndexController::class, 'services']);
Route::get('about', [App\Http\Controllers\IndexController::class, 'aboutUs']);
Route::get('contact', [App\Http\Controllers\IndexController::class, 'contact']);
Route::get('client', [App\Http\Controllers\IndexController::class, 'client']);
Route::view('ttt','ttt');
