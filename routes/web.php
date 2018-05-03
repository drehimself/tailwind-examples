<?php

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

Route::view('/', 'list');
Route::view('/twitter', 'twitter');
Route::view('/youtube', 'youtube');
Route::view('/wp-pusher', 'wp-pusher');
Route::view('/resolute', 'resolute');
