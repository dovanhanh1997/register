<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'HanhDo\Register\Http\Controllers\api'], function () {
    Route::post('api/register', 'RegisterController@register');
});

