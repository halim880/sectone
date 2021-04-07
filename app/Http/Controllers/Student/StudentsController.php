<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Library\IssueBook as Issue;
use App\Models\Student;
use App\Models\Department;
use App\Models\Attendance;
use App\Models\HostelMember;
use Illuminate\Support\Facades\Auth;
class StudentsController extends Controller
{

    public function home(){
        return view('student.home');
    }

    public function attendance(){
        $courses = Auth::user()->student->current_courses();
        return view('student.attendance', compact('courses'));
    }
    

    public function show(Request $data){
        // $attendance = Course::find($data->id)->attendances;
        $attendance = Attendance::orderBy('date')->where('course_id', $data->id)->get()->groupBy(function ($item){
            return $item->date;
        });
        return response($attendance);
    }

    public function all_attendance(Course $course){
        $attendance = Attendance::orderBy('date')->where('course_id', $course->id)->get()->groupBy(function ($item){
            return $item->date;
        });

        if (count($attendance)<1) {
            $message = $course->title. '('.$course->code.')'.' has no attendance';
            return view('exception', compact('message'));
        }
        return view('student.all', compact('attendance'));

    }

    public function books(){
        return view('student.books');
    }

    public function hostel(){
        $hostel = HostelMember::where('student_id', auth()->user()->student->id)->first();
        return view('student.hostel.home', compact('hostel'));
    }
}
