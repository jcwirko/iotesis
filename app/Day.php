<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table = 'days';

    protected $fillable = ['date', 'start_time', 'end_time', 'attend', 'subject_id'];

    protected $appends = [
        'left'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'professor_id', 'id');
    }

    public function getStartTimeAttribute($value)
    {
        return date('H:i', strtotime($value));
    }

    public function getEndTimeAttribute($value)
    {
        return date('H:i', strtotime($value));
    }

    public function getLeftAttribute()
    {
        Carbon::setLocale('es');
        if($this->attributes['date'] == date('Y-m-d')){
            return 'Hoy';
        }
        return ucfirst(Carbon::createFromFormat('Y-m-d', $this->attributes['date'])->diffForHumans());
    }

    public function getDateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
}
