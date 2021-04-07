<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Result;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultsController extends Controller
{
    public function index(){
        $results = Result::where([
            'student_id'=> 2016331509,
            'department_id'=> 101,
            'semester_id'=> 106
        ])->get();
        return view('student.result.home', compact('results'));
    }

    public function show($department_id, $semester_id){

        $student = Auth::user()->student;
        $results = Result::where([
            'student_id'=> 2016331509,
            'department_id'=> $department_id,
            'semester_id'=> $semester_id,
        ])->get();
        return view('student.result.single_result', compact(['results', 'student']));
    }

    public function apply_for_review(Student $student){
        return view('student.result.review-application-form', compact('student'));
    }

    public function createPDF($department_id, $semester_id){

        $student = Auth::user()->student;
        $results = Result::where([
            'student_id'=> 2016331509,
            'department_id'=> $department_id,
            'semester_id'=> $semester_id,
        ])->get();

        $pdf = PDF::loadView('student.result.pdf', compact(['student', 'results']));

        return $pdf->download();
    }
}
