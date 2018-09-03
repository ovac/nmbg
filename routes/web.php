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

Auth::routes();

Route::view('/', 'welcome')->name('welcome');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('portfolio', 'portfolio')->name('portfolio');
// Route::view('register', 'register')->name('register');
Route::view('dashboard', 'interior.dashboard')->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('setup', 'SetupController');
});

Route::group(['middleware' => ['auth', 'setup-profile']], function () {
    Route::view('pay', 'pay');
    Route::view('home', 'interior.dashboard');
    Route::view('profile/edit', 'profile.edit');
    Route::resource('profile', 'ProfileController');
    Route::post('profile/edit', 'ProfileController@update');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
