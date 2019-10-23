<?php

use App\Professor;
use Illuminate\Database\Seeder;

class ProfessorTableSeeder extends Seeder
{
    public function run()
    {
        Professor::create([
            'first_name' => 'Elon',
            'last_name' => 'Musk',
            'phone' => '3764113355',
            'email' => 'elonmusk@spacex.com',
        ]);
    }
}
