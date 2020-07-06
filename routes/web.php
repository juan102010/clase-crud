<?php
Route::get('/','WelcomeController@index');
Route::get('/update','WelcomeController@update');
Route::POST('/store','WelcomeController@store');
Route::get('/destroy','WelcomeController@destroy');