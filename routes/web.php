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

Route::group(['middleware' => 'auth'] , function(){
	Route::get('/', 'bancController@index')->name('index')	;
	Route::get('/add', 'bancController@add')->name('add_obj');
	Route::post('/addasd', 'bancController@addRequest')->name('add');
	Route::get('/edit/{id}', 'bancController@edit')->name('edit');
	Route::post('/edit_request', 'bancController@edit_request')->name('edit_request');

});

Route::get('/test', 'bancController@test')->name('test');
Route::get('/bitcoin-to-bitcoin', 'bancController@btcbtc')->name('btcbtc');
Route::get('/bitcoin-to-bitcoin-cash', 'bancController@btcbth')->name('btcbth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
