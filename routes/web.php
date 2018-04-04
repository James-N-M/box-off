<?php

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('events', 'EventController');
Route::get('events', 'EventController@index'); 
Route::get('events/create', 'EventController@create'); 
Route::post('events/create', 'EventController@store'); 


//Settings routes 
Route::get('settings', 'Users\AccountController@edit');
Route::post('settings', 'Users\AccountController@update'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
