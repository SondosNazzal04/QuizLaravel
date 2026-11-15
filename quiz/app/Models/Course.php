<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lecturer;
use App\Models\Lecture;
use App\Models\User;

class Course extends Model
{
    protected $fillables = [
        'lecturer_id',
        'course_id',
        'title',
        'credit_hours'
    ];

    public function lecturer() {
        return $this->belongsTo(Lecturer::class);
    }

    public function lectures() {
        return $this->hasMany(Lecture::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'course_users')
            ->withPivot('enrollment_date', 'grade')
            ->withTimestamps();
    }
}
