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
    return view('main');
});

Route::get('/home', 'HomeController@index')->name('home');

// Login route
Route::get('/login', function() {
    return view('pages/login');
})->name('login');

// Register route
Route::get('/register', function() {
    return view('pages/register');
})->name('register');

