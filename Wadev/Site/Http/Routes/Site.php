<?php

Route::group(['namespace' => 'Site'], function() {

	Route::get('/', ['uses' => 'HomeController@getIndex']);
    Route::get('/contact', ['uses' => 'ContactController@getIndex']);
	
});