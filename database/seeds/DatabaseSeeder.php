<?php

use App\ClassRoom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AirTableSeeder::class);
        $this->call(ProfessorTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(LightTableSeeder::class);
        $this->call(ClassRoomTableSeeder::class);
        $this->call(DaysTableSeeder::class);
        $this->call(ProfessorSubjectTableSeeder::class);
        $this->call(ClassRoomProfileTableSeeder::class);
        $this->call(FrameworkTableSeeder::class);

    }
}
