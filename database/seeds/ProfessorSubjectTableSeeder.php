<?php

use App\Professor;
use App\Subject;
use Illuminate\Database\Seeder;

class ProfessorSubjectTableSeeder extends Seeder
{
    public function run()
    {
        $professor = Professor::find(1);

        $architecture = Subject::find(1);
        $model = Subject::find(2);

        $professor->subjects()->attach([$architecture->id, $model->id]);
    }
}
