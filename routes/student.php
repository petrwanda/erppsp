<?php

Route::group(['namespace' => 'Student'], function() {
    Route::get('/', 'HomeController@index')->name('student.dashboard');

    //book route

    Route::get('/book', 'BookController@index')->name('book.index');
    // Route::get('/book', 'BookController@student')->name('book.index');
    Route::get('/book/{id}/edit','BookController@edit')->name('book.edit');
    Route::get('/book/{id}/delete','BookController@destroy')->name('book.destroy');
    Route::get('/book/create','BookController@create')->name('book.create');
    Route::post('/book/create','BookController@store')->name('book.store');
    Route::post('/book/update','BookController@update')->name('book.update');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('student.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('student.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('student.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('student.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('student.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('student.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('student.verification.verify');

});