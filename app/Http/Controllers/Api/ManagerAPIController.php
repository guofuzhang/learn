<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ManagerAPIController extends Controller
{
    public function admin_list()
    {
        $info=DB::table('manager')->get();
//        dd($info);
        return response()->json(['status'=>1,'msg'=>'查询成功！','data'=>$info->toArray()]);
//        return $info;
    }
}
