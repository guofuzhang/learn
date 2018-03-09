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



Route::get('/admin_list', 'Api\ManagerAPIController@admin_list');
Route::get('/test/{name?}', 'Api\ManagerAPIController@test');
Route::get('/get_random_sex', 'Api\ManagerAPIController@get_random_sex');
Route::get('/get_sms', 'Api\ManagerAPIController@get_sms');

Route::post('/up_img', 'Api\ManagerAPIController@up_img');
