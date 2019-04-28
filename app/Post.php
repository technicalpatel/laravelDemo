<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Post extends Model
{
    protected $table='post';

    public function comment()
    {
    	return $this->hasMany(Comment::class,'cmt_id','id');
    	
    }
}
