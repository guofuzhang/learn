<?php

namespace App\Http\Controllers\Admin;

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

    public function admin_add()
    {
        return view('admin/admin-add');
    }
}
