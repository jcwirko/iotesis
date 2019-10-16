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
            'min_temp' => 16,
            'max_temp' => 28
        ]);

        Air::create([
            'number' => 2,
            'min_temp' => 18,
            'max_temp' => 30
        ]);
    }
}
