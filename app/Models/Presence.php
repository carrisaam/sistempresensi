<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function course_schedule(){
        return $this->belongsTo(CourseSchedule::class, 'course_schedule_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
