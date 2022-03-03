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

Route::prefix('/app')->group(function () {
    Route::view('/', 'index')->name('app.home');
    Route::view('/all', 'all-news')->name('app.all');
    Route::view('/contact', 'contact')->name('app.contact');
    Route::view('/newsdetailes', 'newsdetailes')->name('app.newsdetailes');
});

Route::fallback(function () {
    echo "This Page is Not Found!";
});
