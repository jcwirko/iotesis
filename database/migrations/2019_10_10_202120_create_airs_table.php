<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirsTable extends Migration
{
    public function up()
    {
        Schema::create('airs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->integer('temp');
            $table->timestamps();
        });
    }
}
