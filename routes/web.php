<?php
Route::get('/', function () {
    return view('index');
});
Auth::routes();
Route::group(['prefix'=>'owner', 'middleware'=>'auth'], function(){
	Route::get('/', function () {
    	return view('index');
	});
});
Route::get('/home', 'HomeController@index')->name('home');
