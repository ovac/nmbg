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

Route::view('/', 'welcome');
Route::view('about', 'about');
Route::view('setup', 'setup');
Route::view('contact', 'contact');
Route::view('register', 'register');
Route::view('portfolio', 'portfolio');

Auth::routes();

Route::group(['middleware' => ['auth', 'setup-profile']], function () {
    Route::view('pay', 'pay');
    Route::view('home', 'home');
});
