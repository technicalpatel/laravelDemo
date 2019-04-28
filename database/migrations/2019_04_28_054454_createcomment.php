<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createcomment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('comment', function (Blueprint $table) 
         {
             $table->bigIncrements('id');
            $table->unsignedInteger('cmt_id');
            $table->foreign('cmt_id')->references('id')->on('post');
            $table->string('cmt_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
