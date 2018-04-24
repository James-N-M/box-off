<?php

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

//Settings Routes 
Route::get('settings', 'Users\AccountController@show');
Route::post('settings', 'Users\AccountController@update'); 

// Profile Routes 
Route::get('profile', 'ProfileController@index'); 
Route::get('profile/{user}', 'ProfileController@show'); 

// Post Routes 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{post}', 'PostController@show'); 
Route::post('/posts', 'PostController@store'); 

// Comment Routes 
Route::post('/comment', 'CommentController@store'); 

Auth::routes();