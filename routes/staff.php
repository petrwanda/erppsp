<?php

Route::group(['namespace' => 'Staff'], function() {
    Route::get('/', 'HomeController@index')->name('staff.dashboard');

    // book route

    Route::get('/book', 'BookController@index')->name('book.index');
    Route::get('/book/{id}/edit','BookController@edit')->name('book.edit');
    Route::post('/book/update/{id}','BookController@update')->name('book.update');


    //room route

    Route::get('/rooms', 'RoomController@index')->name('rooms.index');
    Route::get('/rooms/{id}/edit','RoomController@edit')->name('rooms.edit');
    Route::get('/rooms/{id}/delete','RoomController@destroy')->name('rooms.destroy');
    Route::get('/rooms/create','RoomController@create')->name('rooms.create');
    Route::post('/rooms/create','RoomController@store')->name('rooms.store');
    Route::post('/rooms/update','RoomController@update')->name('rooms.update');





    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('staff.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('staff.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('staff.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('staff.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('staff.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('staff.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('staff.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('staff.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('staff.verification.verify');

});