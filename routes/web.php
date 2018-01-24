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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'Home\IndexController@index');



Route::get('admin/index', 'Admin\ManagerController@index');
Route::get('admin/welcome', 'Admin\ManagerController@welcome');
Route::match(['post','get'],'admin/login', 'Admin\ManagerController@login');
Route::get('admin/admin-list', 'Admin\ManagerController@admin_list');
Route::match(['post','get'],'admin/admin-add/', 'Admin\ManagerController@admin_add');
Route::match(['post','get'],'admin/admin-edit/{manager}', 'Admin\ManagerController@admin_add');
