<?php

use App\Subject;
use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'date' => date('m/d/Y h:i:s a', time())
        ]);

        Subject::create(['name' => 'Arquitectura de computadoras']);

        Subject::create(['name' => 'Bases de datos']);

        Subject::create(['name' => 'Inteligencia Artificial I']);
    }
}
