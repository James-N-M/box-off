<?php

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('events', 'EventController');
Route::get('events', 'EventController@index'); 
Route::get('events/create', 'EventController@create'); 
Route::post('events/create', 'EventController@store'); 

//Profile Routes 


//Settings routes 
Route::get('settings', 'Users\AccountController@edit');
Route::post('settings', 'Users\AccountController@update'); 

// Profile Routes 
Route::get('profile', 'ProfileController@index'); 
Route::get('profile/{user}', 'ProfileController@show'); 

//Match Routes

Route::get('match/create', 'MatchController@create'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
