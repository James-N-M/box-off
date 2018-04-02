<?php

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('events', 'EventController');
Route::get('events', 'EventController@index'); 
Route::get('events/create', 'EventController@create'); 
Route::post('events/create', 'EventController@store'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
