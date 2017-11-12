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



// Member routes
Route::group(['middleware'=>'member'], function() {
    Route::resource('user', 'UserController', ['as' => 'profile']);
    Route::resource('project', 'ProjectController');
});


Auth::routes();

