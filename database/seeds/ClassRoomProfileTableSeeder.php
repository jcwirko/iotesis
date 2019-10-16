<?php

use App\ClassRoomAir;
use App\ClassRoomLight;
use App\ClassRoomProfile;
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
        $simulacion = ProfessorSubject::find(1);
        $arquitectura = ProfessorSubject::find(1);

        $classroomAir = ClassRoomAir::find(1);
        $classroomLights = ClassRoomLight::get();

        $this->assigne($simulacion->id, $classroomAir->id, $classroomLights);
        $this->assigne($arquitectura->id, $classroomAir->id, $classroomLights);
    }

    private function assigne($professorSubjectId, $classroomAirId)
    {
        ClassRoomProfile::create([
            'professor_subject_id' => $professorSubjectId,
            'class_room_light_id' => '',
            'class_room_air_id' => $classroomAirId
        ]);
    }

}
