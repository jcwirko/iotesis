<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professors';

    protected $fillable = ['first_name', 'last_name', 'phone', 'email'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'professor_subject');
    }
}
