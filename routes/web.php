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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('posts', 'PostController');

    Route::get('posts/{post}/like', 'PostController@like')->name('posts.like');
    Route::get('posts/{post}/unlike', 'PostController@unlike')->name('posts.unlike');

    Route::get('posts/{post}/dislike', 'PostController@dislike')->name('posts.dislike');
    Route::get('posts/{post}/undislike', 'PostController@undislike')->name('posts.undislike');
});
