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
	Route::get('/add', 'bancController@add')->name('add_obj');
	Route::get('/all', 'bancController@all')->name('all');
	Route::post('/addasd', 'bancController@addRequest')->name('add');
	Route::get('/edit/{id}', 'bancController@edit')->name('edit');
	Route::post('/edit_request', 'bancController@edit_request')->name('edit_request');
});

Route::get('/test'		, 'bancController@test')->name('test');
Route::get('/'			, 'bancController@btcbtc')->name('btcbtc');
Route::get('/partner'	, 'bancController@partner')->name('partner');
Route::get('/appe'		, 'bancController@appe')->name('appe')	;
Route::get('/help'		, 'bancController@help')->name('help')	;
Route::get('/faq'		, 'bancController@faq')->name('faq')	;
Route::get('/contacts'  	, 'bancController@contacts')->name('contacts')	;
Route::get('/review/{id}'	, 'bancController@review')->name('review');
Route::get('/remove/{id}'	, 'bancController@remove')->name('remove');

Route::get('/list', 'bancController@list')->name('list');
Route::get('/bitcoin-to-bitcoin-cash', 'bancController@btcbth')->name('btcbth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
