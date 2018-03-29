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

Route::get('/converse', function () {
    return view('converse');
});

Auth::routes();

Route::resource('channels', 'ChannelsController');

Route::get('/home', 'ChannelsController@index')->name('home');

Route::get('/front', 'FrontsController@index')->name('front');

Route::get('/admin', 'AdminController@index')->name('adm');

Route::get('/channels/create', 'ChannelsController@create')->name('create');

Route::get('conversation/create', 'ConversationsController@create')->name('convcreate');

Route::post('conversations/store', 'ConversationsController@store')->name('convstore');

Route::get('front/show/{id}', 'FrontsController@show')->name('view');

Route::post('conversation/answer/{id}', 'ConversationsController@answer')->name('convanswer');

Route::get('answer/like/{id}', 'AnswersController@like')->name('answlike');

Route::get('answer/unlike/{id}', 'AnswersController@unlike')->name('answunlike');



