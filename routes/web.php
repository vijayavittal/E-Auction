<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

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


/* Login Route */

Route::get('/login','App\Http\Controllers\Auth\AuthController@index')->name('login');
Route::post('post-login','App\Http\Controllers\Auth\AuthController@postLogin')->name('login.post');

Route::get('/dashboard','App\Http\Controllers\Auth\AuthController@dashboard');
Route::get('/logout','App\Http\Controllers\Auth\AuthController@logout')->name('logout');

/* Auction Route */

