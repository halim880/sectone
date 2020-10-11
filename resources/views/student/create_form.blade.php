@extends('layouts.student')


@section('content')
    <div class="container">
        <form action="{{URL::to('student/form/submit')}}" method="post" enctype="multipart/form-data" id="semester_form">
            <div class="card" style="padding: 15px;">
                <div class="row center-align orange">
                    <h4>Semester Final Form</h4>
                </div>
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
        </form>

    </div>
@endsection

<script>
    function next(id){
        document.getElementById('semester_form').addEventListener('submit', function(e){
            e.preventDefault();
        });
    }
</script>




{{-- @section('content')
    <style scoped>
        .form_body{
            border: 1px solid grey;
            width: 100%;
            height : auto;
            margin: 10px;
            padding: 10px;
        }
        .col_1{
            width: 300px;
        }
        .col_2{
            width: 100px;
        }
        .col_1 input{
            width: 300px;
        }
        .col_2 input{
            width: 80px;
        }
        .col_3 input{
            width: 70px;
        }
        .student_info,
        .course_info{
            padding: 10px;
            width: 100%;
            display:flex;
            background: #60c0b6;
        }
        .student_info .image{
            height: 250px;
            width: 250px;
        }
        .student_info .image img{
            width: 150px;
            height: 150px;
        }
        .student_info .info{
            width: 600px;
            padding: 10px;
            padding-top: 0px;
            display: flex;
            flex-direction: column;
        }
        .student_info .info>div{
            display: flex;
        }
        .student_info .info>div>div{
            padding: 5px;
        }
        .student_info .info>div .heading{
            width: 140px;
        }
        .student_info .info>div .data{
            width: auto;
        }

        .course_info .current_courses{
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .tr{
            display: flex;
            height: 30px;
        }
        .tr input{
            padding:3px 10px;
        }
        .tr>div{
            margin: 3px 5px;
        }
        .current_courses .heading{
            width:250px;
        }
        .current_courses .details{
            width: 500px;
        }
        .form_heading{
            width: 100%;
            height: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #22a79ab8;
        }
    </style>
<div class="card-panel">
    <div class="form_body">
        <div class="form_heading">
            <div><h1>Sylhet Engineering College</h1></div>
        </div>
        <hr>
        <div class="student_info">
            <div class="image">
                <img src="{{asset('image/student/'.Auth::user()->student->image)}}" alt="">
            </div>
            <div class="info">
                <div>
                    <div class="heading">Student's Name</div>
                    <div>:</div>
                    <div class="data">{{Auth::user()->name}} </div>
                </div>
                <div>
                    <div class="heading">Registration</div>
                    <div>:</div>
                    <div class="data">{{Auth::user()->student->id}} </div>
                </div>
                <div>
                    <div class="heading">Department</div>
                    <div>:</div>
                    <div class="data">{{Auth::user()->student->department->name}}</div>
                </div>
                <div>
                    <div class="heading">Session</div>
                    <div>:</div>
                    <div class="data">{{Auth::user()->student->session}}</div>
                </div>
                <div>
                    <div class="heading">Semester</div>
                    <div>:</div>
                    <div class="data">{{Auth::user()->student->semester->name}}</div>
                </div>
                <div>
                    <div class="heading">Father's Name</div>
                    <div>:</div>
                    <div class="data">{{Auth::user()->student->father_name}}</div>
                </div>
                <div>
                    <div class="heading">Mother's Name</div>
                    <div>:</div>
                    <div class="data">{{Auth::user()->student->mother_name}} </div>
                </div>
                <div>
                    <div class="heading">Phone Number</div>
                    <div>:</div>
                    <div class="data">{{Auth::user()->student->phone}}</div>
                </div>
                <div>
                    <div class="heading">Current Address</div>
                    <div>:</div>
                    <div class="data"><address>{{Auth::user()->student->current_address}}</address></div>
                </div>
                <div>
                    <div class="heading">Permanent Address</div>
                    <div>:</div>
                    <div class="data"><address>{{Auth::user()->student->permanent_address}}</address></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="course_info">
            <div class="current_courses">
                <div class="heading">
                    <h3>Current Courses</h3>
                </div>
                <div class="details">
                    <div class="tr">
                        <div class="col_1">Course title</div>
                        <div class="col_2">Code</div>
                        <div class="col_3">Credit</div>
                    </div>
                    <div>
                        @foreach ($courses as $course)
                        <div class="tr">
                            <div class="col_1"><input type="text" value="{{$course->title}}"></div>
                            <div class="col_2"><input type="text" value="{{$course->code}}"></div>
                            <div class="col_3"><input type="text" value="{{$course->credit}}"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
@endsection --}}