<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Stream;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
