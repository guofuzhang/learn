<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class member_type extends Model
{
    //
    protected  $table='member_type';
    protected $primaryKey='type_id';

    public function get_type()
    {
        return $this->hasOne(member::class,'member_type','type_id');
    }


    public function get_type2()
    {
        return $this->hasOne(member::class,'member_type','type_id');
    }
}
