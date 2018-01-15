<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function index()
    {
        return view('admin/index');
   }

    public function welcome()
    {
        return view('admin/welcome');
    }


    public function login()
    {
        return view('admin/login');
    }



    public function admin_list()
    {
        return view('admin/admin-list');
    }

    public function admin_add(Request $request)
    {
        if($request->isMethod('post')){
//            var_dump($request->all());
            $shuju=$request->all();
//            var_dump( 0000000000000);die;
            $shuju['password']=bcrypt($shuju['password']);

            if(Manager::create($shuju)){
                return ['success'=>true];
            }else{
                return ['success'=>false];
            }
//            echo 1111;
        }else{
//            echo 22222;die;
            return view('admin/admin-add');
        }


    }
}
