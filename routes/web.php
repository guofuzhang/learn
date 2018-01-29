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

Route::any('captcha-test', function()
{
//    if (Request::getMethod() == 'POST')
//    {
//        $rules = ['captcha' => 'required|captcha'];
//        $validator = Validator::make(Input::all(), $rules);
//        if ($validator->fails())
//        {
//            echo '<p style="color: #ff0000;">Incorrect!</p>';
//        }
//        else
//        {
//            echo '<p style="color: #00ff30;">Matched :)</p>';
//        }
//    }

    $form = '<form method="post" action="captcha-test">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});
