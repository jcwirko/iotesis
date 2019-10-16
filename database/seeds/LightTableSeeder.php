<?php

use App\Light;
use Illuminate\Database\Seeder;

class LightTableSeeder extends Seeder
{
    protected $totalLights = 9;


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, $this->totalLights) as $number) {
            Light::create(['number' => $number]);
        }
    }
}
