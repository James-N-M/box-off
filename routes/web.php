<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('events', 'EventController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
