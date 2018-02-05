<?php

namespace App\Http\Controllers\Api;

use App\Http\Models\Manager;
use App\Http\Models\member;
use App\Http\Models\member_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ManagerAPIController extends Controller
{
    public function admin_list(Request $request)
    {
        Session::put('name','xiaoming');
//        dd(Session::all());
//        $user = Auth::user();
//        dd($user);
//        $info=DB::table('manager')->get();
//        $info=DB::table('manager')->where('username','jack')->value('password');
//        $info = DB::table('manager')->pluck('id,username');
        DB::connection()->enableQueryLog(); // 开启查询日志
        $info = DB::table('public_project_report_tmp')->get();

        $info=DB::table('public_project_report_tmp')->select('report_id','report_id_tmp','report_title as title')->distinct()->get();

        $query = DB::table('public_project_report_tmp')->select('report_id');
        $users = $query->addSelect('report_id_tmp')->get();


        $users = DB::table('public_project_report_tmp')->skip(1)->take(5)->get();
        $queries = DB::getQueryLog();
        dd($queries);



        Log::info('Showing user profile for user: '.$users);

//        var_dump($info);
//         $res=DB::table('public_project_report_tmp')->increment('report_id');
        dd($users);
        foreach ($info as $a){
            echo $a;
        }
//        dd($info);
//        return response()->json(['status'=>1,'msg'=>'查询成功！','data'=>$info->toArray()]);
//        return $info;
    }

    public function get_random_sex()
    {
        $str='';
        $number=rand(1,4);
        if($number%2==0){
            $str='女';
        }else{
            $str='男';
        }
        return $str;

    }


    public function test()
    {
//        $res=DB::table('public_project_report_tmp')->select(DB::raw('count(*) as num,MAX(report_id),report_id_tmp'))->groupBy('report_id_tmp')->get();
////        $where=array();
////        $where['manager.id'];
//        $res=DB::table('public_project_report_tmp')->leftJoin('manager','public_project_report_tmp.report_id','=','manager.id')->where('manager.id','>','50')->get();
//        DB::connection()->enableQueryLog(); // 开启查询日志
////        $res=DB::table('public_project_report_tmp')->leftJoin('manager','public_project_report_tmp.report_id','=','manager.id')->where($where)->get();
//        $queries = DB::getQueryLog();
//        dd($queries);
//        dd($res);

//$info=member_type::paginate(5);
//        DB::connection()->enableQueryLog(); // 开启查询日志
//        $info=Manager::with('report')->paginate(5);
        $info=member_type::with("get_type2");
//        $queries = DB::getQueryLog();
        dd($info);die;
//        dd($info);die;

        $info=Manager::with('report')->paginate(5);
        foreach ($info as $v){
            echo($v->report->report_content)."<br>";
        }
        die;
//        dd($info);die;


        $info=DB::table('manager')->paginate(10);
        DB::connection()->enableQueryLog(); // 开启查询日志
        $res=Manager::limit(10)->get();
        dd($res);
//
                $queries = DB::getQueryLog();
        dd($queries);








        $str='SELECT t1.*
FROM tb_history_version AS t1
INNER JOIN
(
SELECT t2.barCode, MAX(t2.createDate) AS maxdate
FROM tb_history_version AS t2
GROUP BY t2.barCode
) AS t3 ON t1.barCode = t3.barCode AND t1.createDate = t3.maxdate;';



        $sql='select * from public_project_report_tmp order by  report_id ';
    }




}
