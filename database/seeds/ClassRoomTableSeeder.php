<?php

use App\ClassRoom;
use Illuminate\Database\Seeder;

class ClassRoomTableSeeder extends Seeder
{
    public function run()
    {
        ClassRoom::create(['number' => 1]);
    }
}
