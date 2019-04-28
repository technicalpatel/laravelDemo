<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeacultyModel extends Model
{
	 protected $table = 'faculty';
    protected $fillable =['fname','femail','fcity'];	
    public $timestamps = false;
}
