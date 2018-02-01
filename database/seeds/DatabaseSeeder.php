<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker=Faker\Factory::create('zh_CN');
        $pwd='123456';
        for($i=0;$i<100;$i++){
            $obj= new \App\Http\Controllers\Api\ManagerAPIController();
            $sex=$obj->get_random_sex();
            \Illuminate\Support\Facades\DB::table('manager')->insert([
                'username'=>$faker->name,
                'password'=>$pwd,
                'mg_role_ids'=>2,
                'mg_sex'=>$sex,
                'mg_phone'=>$faker->phoneNumber,
                'mg_email'=>$faker->email,
                'mg_remark'=>$faker->title
            ]);

        }
    }
}
