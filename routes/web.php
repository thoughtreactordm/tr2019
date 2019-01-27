<?php

Route::get('/', 'BlogController@index');
Route::view('/about', 'pages.about');
Route::get('/blog/{slug}', 'BlogController@show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
