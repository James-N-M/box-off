<?php

    // Settings Routes
    Route::get('settings', 'Users\AccountController@show');
    Route::post('settings', 'Users\AccountController@update');

    // Profile Routes
    Route::get('profile', 'ProfileController@index');
    Route::get('profile/{user}', 'ProfileController@show');


