<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorSubjectTable extends Migration
{
    public function up()
    {
        Schema::create('professor_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('professor_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('framework_id')->nullable();

            $table->foreign('professor_id')
                ->references('id')
                ->on('professors');

            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects');

            $table->foreign('framework_id')
                ->references('id')
                ->on('frameworks');

            $table->timestamps();
        });
    }
}
