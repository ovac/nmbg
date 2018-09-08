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
Route::view('terms', 'terms')->name('terms');
Route::resource('models', 'ModelController');
Route::view('contact', 'contact')->name('contact');
Route::view('portfolio', 'portfolio')->name('portfolio');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('setup', 'SetupController');
    Route::get('logout', function () {
        Auth::logout();
        return redirect('/');
    });
});

Route::group(['middleware' => ['auth', 'setup-profile']], function () {
    Route::view('pay', 'pay');
    Route::resource('faq', 'FaqController');
    Route::view('comments', 'interior.comments');
    Route::resource('calendar', 'CalenderController');
    Route::resource('orders', 'TicketOrderController');
    Route::get('profile/edit', 'ProfileController@edit');
    Route::resource('subscribe', 'SubscriptionController');
    Route::resource('profile', 'ProfileController');
    Route::post('profile/edit', 'ProfileController@update');
    Route::resource('portfolio', 'PersonalPictureController');
    Route::resource('nmbg-portfolio', 'NMBGPictureController');
    Route::get('home', 'DashboardController@dashboard')->name('dashboard');
    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
