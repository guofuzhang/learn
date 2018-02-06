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



Route::get('admin/index', 'Admin\ManagerController@index')->middleware('auth');
Route::get('admin/send_email', 'Admin\ManagerController@send_email');
Route::get('admin/welcome', 'Admin\ManagerController@welcome');
Route::match(['post','get'],'admin/login', 'Admin\ManagerController@login');
Route::match(['post','get'],'admin/gopay', 'Admin\ManagerController@goPay');

Route::get('/testPost',function(){
    $csrf_token = csrf_token();
    $form = <<<FORM
        <form action="/hello" method="POST">
            <input type="hidden" name="_token" value="{$csrf_token}">
            <input type="text" value="" name="number">
            <input type="submit" value="Test"/>
        </form>
FORM;
    return $form;
});

Route::post('/hello',function(){
    return "Hello Laravel[POST]!";
});


//播放器路由地址
Route::match(['post','get'],'admin/play', 'Admin\StreamController@play');

Route::match(['post','get'],'stream/add', 'Admin\StreamController@add');


Route::match(['get','post'],'admin/admin-list', 'Admin\ManagerController@admin_list');
Route::match(['post','get'],'admin/admin-add/', 'Admin\ManagerController@admin_add');
Route::match(['post','get'],'admin/admin-edit/{manager}', 'Admin\ManagerController@admin_add');
Route::get('admin/get_sex', 'Admin\ManagerController@get_sex');

Route::get('/hello/{name?}',function($a){
    dd($a) ;
});

\Illuminate\Support\Facades\Auth::routes();

Route::get('home/index', 'HomeController@index')->name('home');
