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

Route::view('/','contents.welcome');
Route::prefix('email')->name('email.')->group(function() {
    Route::view('welcome','emails.welcome')->name('welcome');
    Route::view('live','emails.live')->name('live');
});
