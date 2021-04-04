<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Attendance;
class AttendanceController extends Controller
{
    public function home(){
        return view('teacher.attendance.home');
    }
    public function sheet(Request $data){
        $department_id = $data->department_id;
        $courses = $this->get_courses($data);
        $students = Student::where([['department_id', '=', $data->department_id], ['semester_id', '=', $data->semester_id]])->get();
        $registration = [];
        foreach ($students as $student) {
            $registration[] = $student->id;
        }
        sort($registration);
        return view('teacher.attendance.sheet', compact('registration', 'courses', 'department_id'));
    }

    public function store(Request $data){

        $date =  random_int(10,30).'/'.random_int(10,12).'/'.'20';
        foreach ($data->rules as $student) {
            $attendance = new Attendance;
            $attendance->department_id = 11;
            $attendance->course_id = $data->course_id;;
            $attendance->student_id = $student;
            $attendance->date = $date;

            $attendance->status = true;
            foreach ($data->absents as $absent) {
                if($student==$absent){
                    $attendance->status = false;
                }
            }
            $attendance->save();
        }
        return response()->json(["message"=> "Saved"]);
    }

    public function review(Request $data){
        $courses = $this->get_courses($data);
        $attendance = Attendance::where([['department_id', '=', '1'],['course_id', '=', '1601']])->get();
        return view('teacher.attendance.review', compact('attendance', 'courses'));
    }


    public function update(Request $data){

        $attendance = Attendance::find($data->id);
        if($attendance->status == '1'){
            $attendance->status = '0';
        }
        else{
            $attendance->status = '1';
        }
        $attendance->save();
        return response()->json('Saved');
    }




    public function test(){
        return view('teacher.attendance.test');
    }


    public function all_attendance(Course $course){
        $attendance = Attendance::orderBy('date')->where('course_id', $course->id)->get()->groupBy(function ($item){
            return $item->date;
        });

        $data = $this->students($course);
        $rules = [];
        foreach ($data as $student) {
            $rules[] = $student->id;
        }

        return view('teacher.attendance.empty', compact(['attendance', 'rules', 'course']));

    }

    public function students(Course $course){
        $students = Course::find($course->id)->students;
        return $students;
    }

    public function delete(){
        $attendance = Attendance::where('course_id', '1602')->where('date', '17/07/20')->get();

        foreach ($attendance as $at) {
            $at->course_id = '1603';
            $at->save();
        }
        return 'edited';
    }
}
