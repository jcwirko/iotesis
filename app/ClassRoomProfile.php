<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoomProfile extends Model
{
    protected $table = 'classroomeables';

    protected $fillable = [
        'class_room_air_id',
        'class_room_light_id',
        'professor_subject_id',
        'state'
    ];

    public function classroomeable()
    {
        return $this->morphTo();
    }


    public function airs()
    {
        return $this->belongsToMany(Air::class, 'classroom_air');
    }

    public function lights()
    {
        return $this->belongsToMany(Light::class, 'classroom_light');
    }
}
