<?php

use App\Air;
use Illuminate\Database\Seeder;

class AirTableSeeder extends Seeder
{
    public function run()
    {
        Air::create([
            'number' => 1,
            'temp' => 22,
        ]);
    }
}
