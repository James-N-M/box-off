<?php

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Post Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{post}', 'PostController@show');

// Event Routes 
Route::get('/events', 'EventController@index'); 
Route::get('/events/create', 'EventController@create'); 
Route::get('/events/{event}/edit','EventController@edit'); 
Route::post('events/store','EventController@store'); 

// Comment Routes
Route::post('/comment', 'CommentController@store');

Auth::routes();
