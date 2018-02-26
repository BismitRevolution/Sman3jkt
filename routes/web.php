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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PageController@index')->name('index');
Route::get('/profile', 'PageController@getProfile');
Route::get('/ppdb', 'PageController@getPPDB');
Route::get('/akademik', 'PageController@getAkademik');
Route::get('/bidang', 'PageController@getBidang');
Route::get('/berita-acara', 'PageController@getBeritaAcara');
Route::get('/prestasi', 'PageController@getPrestasi');
Route::get('/alumni', 'PageController@getAlumni');
Route::get('/sarana-prasarana', 'PageController@getSarana');
Route::get('/staf-manajemen', 'PageController@getStafManajemen');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

    Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'AdminAuth\RegisterController@register');

    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
