<?php

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Events Routes 
Route::get('events', 'EventController@index'); 
Route::get('events/create', 'EventController@create'); 
Route::post('events/create', 'EventController@store'); 

//Settings Routes 
Route::get('settings', 'Users\AccountController@edit');
Route::post('settings', 'Users\AccountController@update'); 

// Profile Routes 
Route::get('profile', 'ProfileController@index'); 
Route::get('profile/{user}', 'ProfileController@show'); 

//Match Routes
Route::get('match', 'MatchController@index'); 
Route::get('match/create', 'MatchController@create');
Route::get('match/{id}', 'MatchController@show');  
Route::post('match/publishresults', 'MatchController@store'); 

// Post Routes 
Route::get('/home', 'HomeController@index')->name('home'); // blending for authentication 
Route::get('/post/{post}', 'PostController@show'); 
Route::post('/posts', 'PostController@store'); 

// Comment Routes 
Route::post('/comment', 'CommentController@store'); 

//Admin panel to and api routes to get info for graphs
Route::get('/admin','AdminController@index'); 
Route::get('/api/getposts', 'AdminController@getPosts'); 
Route::get('/api/getcomments', 'AdminController@getComments'); 
Route::get('/api/getusers', 'AdminController@getUsers'); 
Route::get('/api/getevents', 'AdminController@getEvents'); 
Route::get('/api/getmatches', 'AdminController@getMatches'); 
Route::get('/api/getlocations', 'AdminController@getLocations'); 
Route::get('/api/getclubs', 'AdminController@getClubs'); 

Auth::routes();