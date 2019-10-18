<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('attend');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('professor_id');


            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects');

            $table->foreign('professor_id')
                ->references('id')
                ->on('professors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
    }
}
