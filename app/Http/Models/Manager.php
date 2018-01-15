<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
   protected  $table='manager';
   protected $primaryKey='mg_id';

   protected  $fillable=['username','password','mg_role_id','mg_sex','mg_phone','mg_remark'];
}
