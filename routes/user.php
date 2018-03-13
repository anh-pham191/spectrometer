<?php

\Route::group(['middleware' => ['user.values']], function () {
    \Route::get('/', 'User\IndexController@index');
    \Route::get('/upload', 'User\IndexController@getUpload');
    \Route::get('/upload/{id}', 'User\IndexController@getUploadID');
    \Route::post('/upload', 'User\IndexController@postUpload');
    \Route::get('/uploadfile', 'User\IndexController@getUploadFile');
    \Route::post('/uploadfile', 'User\IndexController@postUploadFile');
    \Route::get('/contact', 'User\IndexController@getContact');
    \Route::post('/contact', 'User\IndexController@postContact');

    \Route::group(['middleware' => ['user.guest']], function () {
        \Route::get('signin', 'User\AuthController@getSignIn');
        \Route::post('signin', 'User\AuthController@postSignIn');

        \Route::get('signin/facebook', 'User\FacebookServiceAuthController@redirect');
        \Route::get('signin/facebook/callback', 'User\FacebookServiceAuthController@callback');

        \Route::get('forgot-password', 'User\PasswordController@getForgotPassword');
        \Route::post('forgot-password', 'User\PasswordController@postForgotPassword');

        \Route::get('reset-password/{token}', 'User\PasswordController@getResetPassword');
        \Route::post('reset-password', 'User\PasswordController@postResetPassword');

        \Route::get('signup', 'User\AuthController@getSignUp');
        \Route::post('signup', 'User\AuthController@postSignUp');

    });
    Route::get('/logout', '\App\Http\Controllers\User\AuthController@logout');
    Route::get('/search', 'User\IndexController@search');
    Route::post('/search', 'User\IndexController@postSearch');

    Route::get('/searchjson', 'User\IndexController@searchjson');
//    \Route::group(['middleware' => ['user.auth']], function () {
//
//    });
});
