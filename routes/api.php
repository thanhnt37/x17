<?php

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1', 'namespace' => 'V1'], function () {

        Route::group(['middleware' => []], function () {
            // Authentication
            Route::post('signin', 'AuthController@signIn');
            Route::post('signup', 'AuthController@signUp');
            Route::post('token/refresh', 'AuthController@refreshToken');
        });

        Route::group(['middleware' => 'api.auth'], function () {
            Route::resource('articles', 'ArticleController');

            Route::group(['prefix' => 'profile'], function() {
                Route::get('/getInfo', 'UserController@show');
                Route::put('/update', 'UserController@update');
            });

            Route::post('signout', 'AuthController@postSignOut');
        });
    });
});
