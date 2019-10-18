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
        Schema::create('classroomeables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_room_id');
            $table->integer('classroomeable_id');
            $table->string('classroomeable_type');
            $table->boolean('state');
            $table->unsignedInteger('professor_subject_id');
            $table->timestamps();

            $table->foreign('class_room_id')
                ->references('id')
                ->on('classrooms');

            $table->foreign('professor_subject_id')
                ->references('id')
                ->on('professor_subject');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroomeables');
    }
}
