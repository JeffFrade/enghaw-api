<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Auth::routes(['register' => false]);

Route::group(['prefix' => 'user'], function () {
    Route::post('/store', 'UserController@store')->name('user.store');
});

Route::group(['middleware' => 'auth:api'], function () {

});
