<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class User_rel extends Model
{
   protected $table='userrel';

    public function carname()
    {
    		return $this->hasOne(Car::class);
    }
}
