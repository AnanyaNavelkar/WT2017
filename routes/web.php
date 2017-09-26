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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/buy', 'UploadBookController@buy');

Route::get('sell', 'UploadBookController@index');

Route::post('uploadbook', 'UploadBookController@storeBookDetails');

Route::post('/send', '/Mail/ContactsShared@build');