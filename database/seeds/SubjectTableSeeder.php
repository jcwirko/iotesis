<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    public function run()
    {
        Subject::create(['name' => 'Arquitectura de computadoras']);
        Subject::create(['name' => 'Modelo y Simulación']);
    }
}
