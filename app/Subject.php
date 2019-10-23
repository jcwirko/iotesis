<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = ['name'];

    public function professorSubject()
    {
        return $this->hasOne(ProfessorSubject::class);
    }

    public function day()
    {
        return $this->hasOne(Day::class);
    }
}
