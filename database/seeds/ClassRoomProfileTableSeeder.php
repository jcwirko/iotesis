<?php

use App\Air;
use App\ClassRoom;
use App\ClassRoomAir;
use App\ClassRoomLight;
use App\ClassRoomProfile;
use App\Light;
use App\ProfessorSubject;
use Illuminate\Database\Seeder;

class ClassRoomProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $architecture = ProfessorSubject::find(1);
        $model = ProfessorSubject::find(2);

        $classroom = ClassRoom::find(1);

        $air = Air::find(1);
        $lights = Light::orderBy('number', 'asc')->get();

        $classroom->airs()->attach($air->id, [
            'professor_subject_id' => $architecture->id,
            'state' => true,
        ]);

        $classroom->airs()->attach($air->id, [
            'professor_subject_id' => $model->id,
            'state' => true,
        ]);

        foreach ($lights as $light) {
            $classroom->lights()->attach($light->id, [
                'professor_subject_id' => $architecture->id,
                'state' => $light->number < 4 ? true : false
            ]);

            $classroom->lights()->attach($light->id, [
                'professor_subject_id' => $model->id,
                'state' => true
            ]);
        }


    }

}
