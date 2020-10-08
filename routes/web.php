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

Route::get('/', function () {
    return view('welcome');
});

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    // 中略
    Route::resource('shows', 'ShowsController');
    Route::get('stats', 'UsersController@stats')->name('users.stats');
    Route::get('period_search', 'ShowsController@period_search')->name('shows.period_search');
    Route::get('period_stats', 'UsersController@period_stats')->name('users.period_stats');
    Route::post('complete_1st', 'StageFormController@complete_1st')->name('complete_1st');
    Route::post('complete_2nd', 'StageFormController@complete_2nd')->name('complete_2nd');
    Route::post('complete_3rd', 'StageFormController@complete_3rd')->name('complete_3rd');
    Route::post('complete_4th', 'StageFormController@complete_4th')->name('complete_4th');
    Route::post('complete_5th', 'StageFormController@complete_5th')->name('complete_5th');
    Route::post('complete_6th', 'StageFormController@complete_6th')->name('complete_6th');
    Route::post('complete_7th', 'StageFormController@complete_7th')->name('complete_7th');

});