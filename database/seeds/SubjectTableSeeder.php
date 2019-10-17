<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(['name' => 'Arquitectura de computadoras']);

        Subject::create(['name' => 'Modelo y Simulación']);

        Subject::create(['name' => 'Bases de datos']);

        Subject::create(['name' => 'Inteligencia Artificial I']);
    }
}
