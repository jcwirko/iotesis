<?php

use App\Air;
use Illuminate\Database\Seeder;

class AirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Air::create([
            'number' => 1,
            'temp' => 22,
        ]);

        Air::create([
            'number' => 2,
            'temp' => 25,
        ]);
    }
}
