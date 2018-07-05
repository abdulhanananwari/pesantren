<?php

Route::group(['namespace' => '\Wadev\Site\Http\Controllers'], function() {
    
    include('Routes/Site.php');
});

Route::get('/albidayah/administrator/', function() {
    return redirect('/wadev/site/admin/index.html');
});
