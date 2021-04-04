@extends('layouts.student')


@section('content')
    <div class="container">
        <form action="{{URL::to('student/form/submit')}}" method="post" enctype="multipart/form-data" id="semester_form">
            <div class="card" style="padding: 15px;">
                <div class="row center-align orange">
                    <h4>Semester Final Form</h4>
                </div>
                <div id="first_part">
                    <div class="row">
                        <div class="input-field col m6">
                            <input type="text" name="name" id="name" value="{{Auth::user()->name}}">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col m6">
                            <input type="text" name="name" id="name" value="{{Auth::user()->student->id}}">
                            <label for="name">Registration</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6">
                            <input type="text" name="name" id="department" value="{{Auth::user()->student->department->name}}">
                            <label for="department">Department</label>
                        </div>
                        <div class="input-field col m6">
                            <input type="text" name="name" id="name" value="{{Auth::user()->student->semester->name}}">
                            <label for="name">Semester</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6">
                            <input type="text" name="session" id="session" value="{{Auth::user()->student->session}}">
                            <label for="session">Session</label>
                        </div>
                        <div class="input-field col m6">
                            <input type="text" name="father_name" id="father_name" value="{{Auth::user()->student->father_name}}">
                            <label for="father_name">Father's name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6">
                            <input type="text" name="father_name" id="father_name" value="{{Auth::user()->student->father_name}}">
                            <label for="father_name">Father's name</label>
                        </div>
                        <div class="input-field col m6">
                            <input type="text" name="mother_name" id="mother_name" value="{{Auth::user()->student->mother_name}}">
                            <label for="mother_name">Father's name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m12">
                            <input type="text" name="permanent_address" id="permanent_address" value="{{Auth::user()->student->permanent_address}}">
                            <label for="permanent_address">Permanent Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m12">
                            <input type="text" name="permanent_address" id="permanent_address" value="{{Auth::user()->student->permanent_address}}">
                            <label for="permanent_address">Permanent Address</label>
                        </div>
                    </div>
                    <div class="row center-align">
                        <button class="btn orange" onclick="next('course_credit')">Next</button>
                    </div>
                </div>
                <div id="second_part">
                    <div class="row">
                        <div class="col m3 title">
                            <h4>Courses</h4>
                        </div>
                        <div class="col m8">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course Title</th>
                                        <th>Code</th>
                                        <th>Credit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach (Auth::user()->student->courses as $course)
                                    <tr>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$course->credit}}</td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row center-align">
                        <button class="btn orange" onclick="submit('')">Submit</button>
                    </div>
                </div>
                
            </div>
        </form>

    </div>
@endsection

<script>
    function next(id){
        document.getElementById('semester_form').addEventListener('submit', function(e){
            e.preventDefault();
        });
        document.getElementById('first_part').style.display = 'none';
        document.getElementById('second_part').style.display = 'block';
    }

    function submit() {
        document.getElementById('semester_form').submit();
    }
</script>

<style>
    #second_part {
        display: none;
    }
    #second_part .title{
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
</style>
