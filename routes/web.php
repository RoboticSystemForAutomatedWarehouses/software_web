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
    return view('home');
});


Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/call_us', function () {
    return view('call_us');
});


Route::get('/history', function () {
    return view('history_orders');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/scheduled', function () {
    return view('scheduled_orders');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/sign_up', function () {
    return view('sign_up');
});




