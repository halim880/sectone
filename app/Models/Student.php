<?php

namespace App\Models;

use App\Models\Attendance;
use App\Models\Department;
use App\Models\Semester;
use App\Models\Hostel\Member as H_Member;
use App\Models\Academic\Course;
use App\Models\Academic\DropCourse;
use App\Models\Library\Member as L_Member;
use App\Models\Library\IssueBook as Book;
use Illuminate\Database\Eloquent\Model;

use App\Traits\UserInfo;


class Student extends Model
{
    use UserInfo;
    

    public function attendance(){
        return $this->hasMany(Attendance::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

    public function hostel_member(){
        return $this->hasOne(H_Member::class);
    }
    
    public function library_member(){
        return $this->hasOne(L_Member::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function current_courses(){
        return Course::where([
            'semester_id'=> $this->semester_id,
            'department_id'=> $this->department_id,
        ])->get();
    }


    public function drop_courses(){
        return $this->belongsToMany(Course::class, 'drop_courses', 'student_id', 'course_id');
    }

    public function getSemesterNameAttribute(){
        return $this->semester->name;
    }

}
