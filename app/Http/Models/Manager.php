<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;


class Manager extends User
{
   protected  $table='manager';
   protected $primaryKey='id';

   protected  $fillable=['username','password','mg_role_ids','mg_sex','mg_phone','mg_remark','mg_email'];


    public function report()
    {
        return $this->hasOne(Report::class,'report_id','id');
   }

    public function member_info()
    {
        return $this->hasOne(member::class,'member_id','id');
    }
}
