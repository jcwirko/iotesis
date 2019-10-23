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
    public function run()
    {
        $architecture = ProfessorSubject::find(1);
        $model = ProfessorSubject::find(2);

        $classroom = ClassRoom::find(1);

        $air = Air::find(1);
        $lights = Light::orderBy('number', 'asc')->get();

        //AIRE ENCENDIDO EN 22 PARA LA MATERIA ARQUITECTURA
        $classroom->airs()->attach($air->id, [
            'professor_subject_id' => $architecture->id,
            'state' => true,
        ]);

        //AIRE APAGADO PARA LA MATERIA MODELO
        $classroom->airs()->attach($air->id, [
            'professor_subject_id' => $model->id,
            'state' => false,
        ]);

        foreach ($lights as $light) {
            //LUCES DELANTES ENCENCIDAS, LAS DEL MEDIO
            // Y ATRAS APAGADAS PARA ARQUITECTURA
            $classroom->lights()->attach($light->id, [
                'professor_subject_id' => $architecture->id,
                'state' => $light->number < 4 ? true : false
            ]);

            //TOAS LAS LUCES ENCENDIDAS PARA MODELO Y SIMULACION
            $classroom->lights()->attach($light->id, [
                'professor_subject_id' => $model->id,
                'state' => true
            ]);
        }

    }
}
