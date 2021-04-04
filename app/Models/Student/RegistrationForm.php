<?php

namespace App\Models\Student;

use App\Models\Academic\Course;
use Illuminate\Database\Eloquent\Model;

class RegistrationForm extends Model
{
    protected $table = 'exam_registration_forms';
    protected $guarded = [];

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_form', 'form_id', 'course_id');
    }

    public function drop_courses(){
        return $this->belongsToMany(Course::class, 'drop_course_form', 'form_id', 'course_id');
    }
}
