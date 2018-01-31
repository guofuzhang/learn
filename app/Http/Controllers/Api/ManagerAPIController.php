<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ManagerAPIController extends Controller
{
    public function admin_list()
    {
//        $info=DB::table('manager')->get();
//        $info=DB::table('manager')->where('username','jack')->value('password');
//        $info = DB::table('manager')->pluck('id,username');
        $info = DB::table('public_project_report_tmp')->get();
        $info=DB::table('public_project_report_tmp')->select('report_id','report_id_tmp','report_title as title')->distinct()->get();

        $query = DB::table('public_project_report_tmp')->select('report_id');
        $users = $query->addSelect('report_id_tmp')->get();

        $users = DB::table('public_project_report_tmp')->skip(1)->take(5)->get();
//        var_dump($info);
         $res=DB::table('public_project_report_tmp')->increment('report_id');
        dd($res);
        foreach ($info as $a){
            echo $a;
        }
//        dd($info);
//        return response()->json(['status'=>1,'msg'=>'查询成功！','data'=>$info->toArray()]);
//        return $info;
    }
}
