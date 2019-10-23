<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessorSubject extends Model
{
    protected $table = 'professor_subject';

    public function classroomProfiles()
    {
        return $this->hasMany(ClassRoomProfile::class);
    }

}
