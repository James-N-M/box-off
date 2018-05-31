<?php

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Post Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{post}', 'PostController@show');

// Comment Routes
Route::post('/comment', 'CommentController@store');

Auth::routes();
