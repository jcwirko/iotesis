<?php

use App\ClassRoom;
use Illuminate\Database\Seeder;

class ClassRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassRoom::create(['number' => 1]);
        ClassRoom::create(['number' => 2]);
        ClassRoom::create(['number' => 3]);
    }
}
