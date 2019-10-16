<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classrooms';

    protected $fillable = ['number'];

    public function airs()
    {
        return $this->belongsToMany(Air::class, 'classroom_air');
    }

    public function lights()
    {
        return $this->belongsToMany(Light::class, 'classroom_light');
    }
}
