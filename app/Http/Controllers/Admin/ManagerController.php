<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller
{
    public  $model;

    public function index()
    {
        return view('admin/index');
   }

    public function welcome()
    {
        return view('admin/welcome');
    }


    public function login(Request $request)
    {

        if($request->isMethod('post')){
            $name=$_POST['username'];
            $pwd=$_POST['password'];
            $arr=array('username'=>$name,'password'=>$pwd);
            $arr=array('username'=>$name,'password'=>$pwd);
            $res=Auth::guard('admin')->attempt($arr);
//            dd($name,$pwd,$res);
//            die;
//            dd($_POST);
            if($res){
                return redirect('admin/index');
            }else{
                return redirect('admin/login')
                    ->withErrors(array('用户名或密码错误'))
                    ->withInput();
            }

        }else{
            return view('admin/login');
        }

    }

    public function send_email()
    {
        $data = ['email'=>'489668257@qq.com', 'name'=>'hehehheheh', 'uid'=>'123', 'activationcode'=>'4584108'];
        Mail::send('admin/send_email', $data, function($message) use($data)
        {
            $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
        });
    }



    public function admin_list()
    {
        $info=Manager::get();
//        dd($info);

        return view('admin/admin-list',['info'=>$info]);
    }

    public function admin_add(Request $request)
    {
        if($request->isMethod('post')){
            $rules = [
                'username'=>'required|unique:manager,username|min:4|max:12',
                'password'=>'required|confirmed',

            ];
            //② 制作错误提示
            $notices = [
                'username.required' =>'用户名必须填写',
                'username.unique' =>'用户名被占用',
                'username.min' =>'用户名长度不能小于4个字符',
                'username.max' =>'用户名长度不能大于12个字符',
                'password.required' => '密码必须填写',
                'password.confirmed' => '两次输入密码必须一致',
            ];

            //③ 开始校验
            $validator = Validator::make($request->all(),$rules,$notices);
            if($validator->passes()){
                $shuju=$request->all();
                $shuju['password']=bcrypt($shuju['password']);
                Manager::create($shuju);
                return ['success'=>true];
            }else{
                $errorinfo = collect($validator->messages())->implode('0','|');
                return ['success'=>false,'errorinfo'=>$errorinfo];
//                return ['success'=>false];
            }


        }else{
            return view('admin/admin-add');
        }


    }
}
