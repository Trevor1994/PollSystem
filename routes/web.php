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
    return view('pages/home');
});

Route::get('/pages/create', 'PollController@create');


Route::get('/pages/faq', function () {
    return view('/pages/faq');
});

Route::get('/pages/profil', function () {
    return view('pages/profile');
});
