<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_rel;
use App\Car;
use App\Comment;
use App\Post;
class Relation extends Controller
{
    public function one()
    {
    	return Car::find(1)->userdetail;
    }
    public function onemany()
    {
    	$data=  Post::find(1)->comment;
        return view('datalist',compact('data'));

    }
    public function manymany()
    {
    	return "MMCALL";
    }
}
