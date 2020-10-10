



{{-- 
@if (count($attendance)<1)
    {{$rules[1]}}
@else
    No problem
@endif
 --}}







@extends('layouts.teacher')

@section('content')

        @if (count($attendance)>0)
            <div class="date_div">
                @foreach ($attendance as $date => $data)
                    <div class="date" onclick="show_attendance(this, {{$data}})">
                        <h3> {{$date}}</h3>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="take_new" onclick="take_attendance({{$data}})">
            <h3>Take New</h3>
        </div>
        
        <style>
            
        </style>
                <div class="attendanceTableWrapper hide"  id="attendanceTableWrapper">
                    <div class="review" style="flex-direction:collumn;">
                        
                        <div>
                            <h4 id="attendance_course"> </h4>
                        </div>

                        <div>
                            <p id="attendance_date"> </p>
                        </div>
                    </div>
                    
                    <div class="attendanceTableBody" id="attendanceTableBody_view">


                    </div>
                    <div id="button"><button onclick="edit_attendance(this)">Edit Mode</button></div>
                </div>

        </div>
        <script>
        function show_attendance(e, data){
            const divs = e.parentElement.children;
            for (let i = 0; i < divs.length; i++) {
                divs[i].classList.remove('active');
                
            }
            e.classList.add('active');
            let body = document.querySelector('.attendanceTableBody');
            let date = document.getElementById('attendance_date');
            let course = document.getElementById('attendance_course');
            date.innerHTML = '';
            course.innerHTML = '';
            body.innerHTML = '';
            date.innerHTML = 'Date : '+ data[0].date;
            course.innerHTML = `{{$data[0]->course->title}}`;
            data.forEach(att => {
                div = document.createElement('div');
                btn = document.createElement('button');
                btn.setAttribute('id', att.id);
                btn.setAttribute('onclick', 'update_attendance(this)');
                btn.innerHTML = (att.student_id).substring(8, 10);
                if (att.status == '0') {
                    btn.className = 'absent';
                }
                div.appendChild(btn); 
                body.appendChild(div);
            });
            document.getElementById('attendanceTableWrapper').classList.remove('hide');
        }

        function update_attendance(e){
                data = {
                    id: e.id
                }
                fetch('http://127.0.0.1:8000/api/attendance/update', {
                    method: "POST",
                    body: JSON.stringify(data),
                    headers: {
                        "Content-Type" : "application/json;charset = UTF-8"
                    }
                }).then(res => res.json()).then(json=> {
                    console.log(json)
                    if(e.className == 'absent'){
                        e.classList.remove('absent');
                    }
                    else{
                        e.classList.add('absent');
                    }
                });
        }

        function take_attendance(data){
            localStorage.setItem('course_id', data[0].course_id);
            localStorage.setItem('department_id', data[0].department_id);
            let subbtn = document.getElementById('button');
            let body = document.querySelector('.attendanceTableBody');
            let date = document.getElementById('attendance_date');
            let course = document.getElementById('attendance_course');
            let students = [];
            date.innerHTML = '';
            course.innerHTML = '';
            body.innerHTML = '';
            subbtn.innerHTML ='';
            course.innerHTML = `{{$data[0]->course->title}}`;
            data.forEach(att => {
                div = document.createElement('div');
                btn = document.createElement('button');
                btn.setAttribute('id', att.student_id);
                btn.setAttribute('onclick', 'absent(this)');
                students.push(att.student_id);
                btn.innerHTML = (att.student_id).substring(8, 10);
                div.appendChild(btn); 
                body.appendChild(div);
            });
            let b = document.createElement('button');
            b.innerHTML = 'Submit';
            // b.setAttribute('onclick', 'submit()');
            subbtn.appendChild(b);

            document.getElementById('attendanceTableWrapper').classList.remove('hide');
            localStorage.setItem('students', students);

        }

        let absents = [];
        function absent(e){
            absents.push(e.id);
            e.classList.add('absent');
            console.log(absents);
        }

        function submit(){
            let students = localStorage.getItem('students').split(',');
            let attendance = {
                students: students,
                course_id: localStorage.getItem('course_id'),
                department_id : localStorage.getItem('department_id'),
                absents: absents
            }
            fetch('http://127.0.0.1:8000/api/attendance/store', {
                method: "POST",
                body: JSON.stringify(attendance),
                headers: {
                    "Content-Type" : "application/json;charset = UTF-8"
                }
            }).then(res => res.json()).then(json=> {
                console.log(json)
                // goto('teacher/attendance/home');
            });
        }
        </script>
@endsection

<style>
    .date_div{
        height: auto;
        display: flex;
        flex-wrap: wrap;
        cursor: pointer;
    }
    .date_div .take_new,
    .date_div .date{
        height: 50px;
        margin: 5px;
        width: 100px;
        display: flex;
        background: brown;
        align-items: center;
        justify-content: center;
        color: white;
        border-radius: 5px;
    }
    .date_div .take_new{
        background: #21635d;
    }

    .date_div .date.active{
        background: #0c7f80;
    }
    .attendanceTableWrapper{
        margin: 35px;
        border-radius: 5px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px;
    }
    .attendanceTableWrapper.hide{
        display: none;
    }
    .attendanceTableWrapper .title{
        padding: 20px;
        width: 300px;
        text-align: center;
        height: 100px;
        display: flex;
        align-items: center;
        background: #7b0000c9;
        color: white;
        border-bottom: 1px solid rgb(9, 214, 170);
    }
    .attendanceTableWrapper .title h3{
        text-align: center;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: capitalize;
    }

    .attendanceTableWrapper button{
        margin: auto;
        padding: 10px;
        width: 300px;
        color: white;
        border: none;
        border-radius: 0%;
        background: rgb(51, 6, 6);
        color: rgb(6, 198, 218);
    }


    .attendanceTableBody{

        height: 387;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
        align-items: center;
        justify-items: center;
        background: #a90404;
    }


    .attendanceTableBody button{
        width: 45px;
        height: 45px;
        border-radius: 50%;
        border: none;
        outline: none;
        padding: 10px;
        margin: 5px;
        cursor: pointer;
        background: rgb(9, 214, 170);
        color: rgb(0, 0, 0);
        border: 1px solid yellow;
        font-size: 20px;
    }



    /* button will be red when button pressed as absent */
    .attendanceTableBody button.absent{
        background: rgb(224, 47, 47);
        color: white;
    }
    .review{
        padding-top: 10px;
        width: 300px;
        text-align: center;
        height: 100px;
        align-items: center;
        justify-content: center;
        background: #7b0000c9;
        color: white;
        border-bottom: 1px solid rgb(9, 214, 170);
    }
    .review>div{
        height: 35px;
    }
</style>