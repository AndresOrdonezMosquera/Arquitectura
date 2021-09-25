<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'admin'
], function ($router) {
    Route::get('personas', 'personaController@index');
    Route::post('personas/store', 'personaController@store');
    Route::post('personas/update', 'personaController@update');
    Route::post('personas/state', 'personaController@state');
    

});

