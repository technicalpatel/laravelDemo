<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User_rel;
class Car extends Model
{
    protected $table='car';

    public function userdetail()
    {
    	return $this->belongsTo(User_rel::class,'user_rel_id','id');
    }
}
