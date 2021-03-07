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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function(){
   Route::options('user', function () {
       return response()->json();
   });

    Route::match(['post', 'options'], '/user/create', 'UserController@store');
    Route::match(['get', 'options'], '/user/get/{email}/{password}', 'UserController@show');

    Route::match(['get', 'options'], '/top/index', 'ItemInfoController@index');
});