<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Academic\Course;
use App\Models\Student\RegistrationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationFormController extends Controller
{
    public function create_form(){

        $form = RegistrationForm::where([
            'student_id'=> Auth::user()->student_id,
            'semester_id'=> Auth::user()->student->semester_id,
            'student_id'=> Auth::user()->student->department_id,
        ])->first();
        

        if ($form) {
            $current_courses = Auth::user()->student->current_courses();
            $drop_courses = Auth::user()->student->drop_courses;
            return view('student.create_form', compact(['current_courses', 'drop_courses']));
        }
        else return 'your form is submited';
    }

    public function submit(Request $data){
        $form = new RegistrationForm;
        $form->student_id = Auth::user()->student->id;
        $form->department_id = Auth::user()->student->department_id;
        $form->semester_id = Auth::user()->student->semester_id;
        $form->isAccepted = false;
        $current_courses = Auth::user()->student->current_courses();
        $form->save();
        $form->courses()->attach($current_courses);
        return redirect('student/home');
    }
}
