<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'HanhDo\Register\Http\Controllers'], function () {
    Route::get('register', 'RegisterController@index')->name('register.index');
    Route::post('register', 'RegisterController@register');

});
