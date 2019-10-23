<?php

use App\ClassRoom;
use App\Framework;
use Illuminate\Database\Seeder;

class FrameworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Framework::create([
            'name' => 'Ubidots'
        ]);

        Framework::create([
            'name' => 'Thingspeak'
        ]);
    }
}
