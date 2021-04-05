<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Academic\Course;
use App\Models\Student;
use App\Models\Student\RegistrationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationFormController extends Controller
{
    public function create_form(){
        $student = Auth::user()->student;

        $form = RegistrationForm::where([
            'student_id'=> $student->id,
            'semester_id'=> $student->semester_id,
            'department_id'=> $student->department_id,
        ])->get();
        

        if (count($form)<1) {
            $current_courses = $student->current_courses();
            $drop_courses = $student->drop_courses;
            return view('student.create_form', compact(['student']));
        }
        else return redirect('student/form/pdf');
    }

    public function submit(Request $data){
        
        $student = Auth::user()->student;
        $form = new RegistrationForm;

        $image = $data['image'];
        $ext = $image->getClientOriginalExtension();
        $img_name = random_int(1, 6000).'.'.$ext;
        $image->move(public_path('image/form/image'), $img_name);

        $sign = $data['sign'];
        $ext = $sign->getClientOriginalExtension();
        $sign_name = random_int(1, 6000).'.'.$ext;
        $sign->move(public_path('image/form/sign'), $sign_name);

        $form->student_id = $student->id;
        $form->department_id = $student->department_id;
        $form->semester_id = $student->semester_id;
        $form->isAccepted = false;

        $form->image = $img_name;
        $form->sign = $sign_name;

        $current_courses = $student->current_courses();

        $form->save();

        // $form->courses()->attach($current_courses);

        return redirect('student/form/pdf');
    }

    public function student_form_pdf(){
        $student = Auth::user()->student;
        $form = $student->submited_form();
        return view('student.form.pdf', compact(['student', 'form']));
    }

    public function drop_courses($student_id){
        $student = Student::where('id', $student_id)->first();
        return response()->json($student->drop_courses);
    }
}
