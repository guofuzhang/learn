<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class TestController extends Controller
{
    //
    public function test01()
    {
        Excel::create('Filename', function($excel) {

            $excel->sheet('Sheetname', function($sheet) {
                $arr=DB::table('manager')->limit(5)->get();
//                dd(($arr));
                $sheet->row(1, array(
                    '姓名', '性别'
                ));//设置第一行标题
                foreach ($arr as $k=>$v){
                    $sheet->appendRow($k+2, array(
                        $v->username, $v->mg_sex
                    ));

                }
            });

        })->export('xls');







    }
}
