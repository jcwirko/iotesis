<?php

use App\Professor;
use Illuminate\Database\Seeder;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Professor::create([
            'first_name' => 'Elon',
            'last_name' => 'Musk',
            'phone' => '3764113355',
            'email' => 'elonmusk@spacex.com',
        ]);

        Professor::create([
            'first_name' => 'Larry',
            'last_name' => 'Page',
            'phone' => '3764223344',
            'email' => 'larrypage@gmail.com',
        ]);
    }
}
