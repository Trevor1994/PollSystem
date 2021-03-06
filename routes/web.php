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

Route::get('/', function () {
    return view('/auth/login');
});


Route::get('/pages/home', function () {
    return view('/pages/home');
});

Route::get('/pages/create', 'PollController@create');

Route::post('/pages/home', 'PollController@store');


Route::get('/pages/faq', function () {
    return view('/pages/faq');
});

Route::get('/pages/profile', function () {
    return view('pages/profile');
});

Route::get('/home', 'HomeController@index');
