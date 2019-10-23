<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    protected $table = 'airs';

    protected $fillable = ['number', 'temp'];

    public function classrooms()
    {
        return $this->morphToMany(ClassRoom::class, 'classroomeable');
    }
}
