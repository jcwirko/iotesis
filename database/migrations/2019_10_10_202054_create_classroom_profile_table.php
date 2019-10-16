<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroomeable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classroom_id');
            $table->integer('classroomeable_id');
            $table->string('classroomeable_type');
            $table->timestamps();

            $table->foreign('classroom_id')
                ->references('id')
                ->on('classrooms');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroomeable');
    }
}
