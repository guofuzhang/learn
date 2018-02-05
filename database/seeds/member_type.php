<?php

use Illuminate\Database\Seeder;

class member_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('member_type')->insert([

            'type_name'=>'超级管理员',
        ]);
        \Illuminate\Support\Facades\DB::table('member_type')->insert([

            'type_name'=>'t3员工',
        ]);
    }
}
