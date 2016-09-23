<?php

Route::get('/', 'UsersController@index');

Route::group(['prefix' => 'users'], function () {\
    // Create new user
    Route::post('/', 'UsersController@create');

    // Confirm email address
    Route::get('/confirm/{token}', 'UsersController@confirm');

    // Unsubscribe user by ID
    Route::get('/unsubscribe/{userId}', 'UsersController@unsubscribe');
});
