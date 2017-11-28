<?php

Route::group(['middleware' => ['web.values']], function () {
    Route::get('/', 'Web\IndexController@index');
    Route::get('/404', function () {
        return view('pages.web.2017.404', []);
    });
    Route::get('/series', 'Web\SeriesController@lists');
    Route::get('/{category}', 'Web\ArticleController@category');
    Route::get('/{category}/series-{slug}', 'Web\SeriesController@detail');
    Route::get('/{category}/{slug}', 'Web\ArticleController@detail');

    Route::group(['middleware' => ['web.guest']], function () {
        Route::get('signin', 'Web\AuthController@getSignIn');
        Route::post('signin', 'Web\AuthController@postSignIn');

        Route::get('signin/facebook', 'Web\FacebookServiceAuthController@redirect');
        Route::get('signin/facebook/callback', 'Web\FacebookServiceAuthController@callback');

        Route::get('forgot-password', 'Web\PasswordController@getForgotPassword');
        Route::post('forgot-password', 'Web\PasswordController@postForgotPassword');

        Route::get('reset-password/{token}', 'Web\PasswordController@getResetPassword');
        Route::post('reset-password', 'Web\PasswordController@postResetPassword');

        Route::get('signup', 'Web\AuthController@getSignUp');
        Route::post('signup', 'Web\AuthController@postSignUp');

    });

    Route::group(['middleware' => ['web.auth']], function () {

    });
});
