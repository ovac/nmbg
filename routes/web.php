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
Route::view('terms', 'terms')->name('terms');
Route::view('portfolio', 'portfolio')->name('portfolio');
// Route::view('register', 'register')->name('register');
Route::resource('models', 'ModelController');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('setup', 'SetupController');
    Route::get('logout', function () {
        Auth::logout();
        return redirect('/');
    });
});

Route::group(['middleware' => ['auth', 'setup-profile']], function () {
    Route::view('pay', 'pay');
    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
    Route::view('calender', 'interior.calender');
    Route::resource('portfolio', 'PersonalPictureController');
    Route::resource('nmbg-portfolio', 'NMBGPictureController');
    Route::view('home', 'interior.dashboard');
    Route::view('profile/edit', 'profile.edit');
    Route::resource('profile', 'ProfileController');
    Route::resource('orders', 'TicketOrderController');
    Route::resource('faq', 'FaqController');
    Route::view('comments', 'interior.comments');
    Route::post('profile/edit', 'ProfileController@update');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
