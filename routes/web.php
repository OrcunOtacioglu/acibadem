<?php

Route::get('/', 'ApplicationController@index');
Route::get('/contact', 'ApplicationController@contact');
Route::get('/treatment', 'ApplicationController@treatment');
Route::get('/why-us', 'ApplicationController@whyUs');
Route::get('/get-quote', 'ApplicationController@getQuote');
Route::get('package/{type}', 'ApplicationController@package');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
