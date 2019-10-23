<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classrooms';

    protected $fillable = ['number'];

    public function airs()
    {
        return $this->morphedByMany(Air::class, 'classroomeable')->withPivot(['state']);
    }

    public function lights()
    {
        return $this->morphedByMany(Light::class, 'classroomeable')->withPivot(['state']);
    }
}
