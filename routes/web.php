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

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');

// 以下の7つのルーティングは上一行(resourceメソッド)と同じ
// Route::get('messages/{id}', 'MessagesController@show');
// Route::post('messages', 'MessagesController@store');
// Route::put('messages/{id}', 'MessagesController@update');
// Route::delete('messages/{id}', 'MessagesController@destroy');

// Route::get('messages', 'MessagesController@index')->name('messages.index');
// Route::get('messages/create', 'MessagesController@create')->name('messages.create');
// Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');