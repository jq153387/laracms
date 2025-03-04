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

Route::get('/', 'PublicController@home');
Route::get('/home', 'PublicController@index');
//Route::get('/news', 'PublicController@news');

Route::prefix('{guard}')->name('guard.')->group(function () {
    Auth::routes(['verify' => true]);
    Route::get('/', 'ResourceController@home');
    Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
});
