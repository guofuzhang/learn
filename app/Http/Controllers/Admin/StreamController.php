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
}
