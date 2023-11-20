<?php

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

Route::view('/landingPage', 'landingPage')->name('landingPage');

Route::view('/login', 'login')->name('login');

Route::view('/', 'Dashboard')->name('dashboard');

Route::view('/feeds', 'feeds.feeds')->name('feeds');

Route::view('/event', 'event.event')->name('event');

