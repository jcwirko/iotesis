<?php

use App\Professor;
use App\Subject;
use Illuminate\Database\Seeder;

class ProfessorSubjectTableSeeder extends Seeder
{
    /**
     * SE ASIGNA LAS MATERIAS SIMULACIÓN Y ARQUITECTURA A ELON MUSK
     *
     * @return void
     */
    public function run()
    {
        $professor = Professor::find(1); //ELON MUSK

        $simulacion = Subject::find(1);
        $arquitectura = Subject::find(2);

        $professor->subjects()->attach([$simulacion->id, $arquitectura->id]);
    }
}
