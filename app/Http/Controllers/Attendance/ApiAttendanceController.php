<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiAttendanceController extends Controller
{
 

    public function get_students(){
        $students = Student::select('id')->where([['department_id', '=', 101], ['semester_id', '=', 106]])->get();

        return response()->json($students);
    }

    // This Api function works for postman and js.
    public function save_attendance(Request $data){

        foreach ($data['attendance'] as $student) {
            $attendance = new Attendance;
            $attendance-> course_id = $data['course_id'];
            $attendance->department_id = $data['department_id'];;
            $attendance->date = $data['date'];
            $attendance->student_id = $student['id'];
            $attendance->status = $student['isPresent'];
            $attendance->save();
        }
        return response()->json(['message'=> 'success']);
    }

    public function get_attendance($cousrse_id, $date){
        $attendance = Attendance::where([['course_id', '=', $cousrse_id], ['date', '=', $date]])->get();

        return response()->json($attendance);
    }
}
