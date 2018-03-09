<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Stream;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StreamController extends Controller
{
    //
    public function index(Request $request)
    {
        $info=Stream::get();
        return view('admin/stream_list',$info);
    }

    public function play()
    {
        $src='';
        return view('admin/play');
    }


    public function captcha(Request $request)
    {
        if($request->isMethod('post')){
//            dd(11);
            $rules = ['captcha' => 'required|captcha'];
            $validator = Validator::make(\Illuminate\Support\Facades\Input::all(), $rules);
            if ($validator->fails())
            {
                echo '<p style="color: #ff0000;">Incorrect!</p>';die;
            }
            else
            {
                echo '<p style="color: #00ff30;">Matched :)</p>';die;
            }
        }else{
            return view('admin/captcha');
        }
    }


    public function up_img()
    {
        if ($_POST) {
            $file_name = $_FILES['file']['name'];
            //$file_type = $_FILES["file"]["type"];
            $file_tmp = $_FILES["file"]["tmp_name"];
            $file_error = $_FILES["file"]["error"];
            $file_size = $_FILES["file"]["size"];

            if ($file_error > 0) { // 出错
                $message = $file_error;
            } elseif($file_size > 1048576) { // 文件太大了
                $message = "上传文件不能大于1MB";
            }else{
                $date = date('Ymd');
                $file_name_arr = explode('.', $file_name);
                $new_file_name = date('YmdHis') . '.' . $file_name_arr[1];
                $path = "./upload/$date/";
                $file_path = $path . $new_file_name;
                if (file_exists($file_path)) {
                    $message = "此文件已经存在啦";
                } else {
                    //TODO 判断当前的目录是否存在，若不存在就新建一个!
//                    var_dump($path);die;
                    if (!is_dir($path)){mkdir($path,0777);}
                    $upload_result = move_uploaded_file($file_tmp, $file_path);
                    //此函数只支持 HTTP POST 上传的文件
                    if ($upload_result) {
                        $status = 1;
                        $message = $file_path;
                    } else {
                        $message = "文件上传失败，请稍后再尝试";
                    }
                }
                return $status;
            }
        }else{
            return view('admin/upimg');
        }
//        return view('admin/upimg');
    }


    public function get_img()
    {
        if ($_POST) {
            //上传图片具体操作
            $file_name = $_FILES['file']['name'];
            //$file_type = $_FILES["file"]["type"];
            $file_tmp = $_FILES["file"]["tmp_name"];
            $file_error = $_FILES["file"]["error"];
            $file_size = $_FILES["file"]["size"];

            if ($file_error > 0) { // 出错
                $message = $file_error;
            } elseif($file_size > 1048576) { // 文件太大了
                $message = "上传文件不能大于1MB";
            }else{
                $date = date('Ymd');
                $file_name_arr = explode('.', $file_name);
                $new_file_name = date('YmdHis') . '.' . $file_name_arr[1];
                $path = "upload/".$date."/";
                $file_path = $path . $new_file_name;
                if (file_exists($file_path)) {
                    $message = "此文件已经存在啦";
                } else {
                    //TODO 判断当前的目录是否存在，若不存在就新建一个!
                    if (!is_dir($path)){mkdir($path,0777);}
                    $upload_result = move_uploaded_file($file_tmp, $file_path);
                    //此函数只支持 HTTP POST 上传的文件
                    if ($upload_result) {
                        $status = 1;
                        $message = $file_path;
                    } else {
                        $message = "文件上传失败，请稍后再尝试";
                    }
                }
            }
        } else {
            $message = "参数错误";
        }
        return showMsg($status, $message);

    }
    
}
