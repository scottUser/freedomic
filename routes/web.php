<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'oauth', 'namespace' => 'Auth'], function (Router $route) {
    $route->get('/{type}/page', 'OAuthController@page');
    $route->get('/{type}/info', 'OAuthController@info');
    $route->get('/{type}/login', 'OAuthController@login');
});