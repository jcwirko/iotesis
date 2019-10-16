<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Light extends Model
{
    protected $table = 'lights';

    protected $fillable = ['number'];

    public function classrooms()
    {
        return $this->morphToMany(ClassRoom::class, 'classroomeable');
    }


}
