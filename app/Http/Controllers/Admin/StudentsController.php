<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Student;
use App\Models\Academic\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.student.students', compact('students'));
    }

    public function create()
    {
        $semesters = Semester::all();
        return view('admin.student.create', compact('semesters'));
    }

    public function store(Request $request)
    {
        $image = $request['image'];
        $ext = $image->getClientOriginalExtension();
        $img_name = random_int(1, 6000).'.'.$ext;
        $image->move(public_path('image/student'), $img_name);

        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make('password');
        $user->save();

        $student = new Student;
        $student->image = $img_name;
        $student->id = $request['registration'];
        $student->user_id = $user->id;
        $student->father_name = $request['father_name'];
        $student->mother_name = $request['mother_name'];
        $student->phone = $request['phone'];
        $student->department_id = $request['department'];
        $student->session = $request['session'];
        $student->current_address = $request['current_address'];
        $student->permanent_address = $request['permanent_address'];
        $student->semester_id = $request['semester'];
        $student->save();

        return redirect()->route('admin.students');
    }

    public function show(Student $student)
    {
        return view('admin.student.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $semesters = Semester::all();
        return view('admin.student.edit', compact('student', 'semesters'));
    }


    public function update(Request $request, Student $student)
    {
        $image = $request['image'];
        $ext = $image->getClientOriginalExtension();
        $img_name = random_int(1, 6000).'.'.$ext;
        $image->move(public_path('image/student'), $img_name);

        $student->user->name = $request['name'];
        $student->user->email = $request['email'];

        $student->image = $img_name;
        $student->id = $request['registration'];
        $student->department_id = $request['department'];
        $student->session = $request['session'];
        $student->semester_id = $request['semester'];
        $student->user->save();
        $student->save();
        return redirect()->route('admin.students');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students');
    }
}
