<?php

Route::group(['namespace' => 'Site'], function() {

	Route::get('/', ['uses' => 'HomeController@getIndex']);
        
	
});