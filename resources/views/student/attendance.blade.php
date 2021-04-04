@extends('layouts.student')

@section('content')
<style>
    .courses_list{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }

    .courses_list .course{
        height: 100px;
        width: 200px;
        margin: 5px;
        border: none;
        box-shadow: 2px 2px 5px grey;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: green;
        color: #f5f9f9ad;
        cursor: pointer;
        text-align: center;
    }
</style>
    <div class="courses_list">
        @foreach (Auth::user()->student->courses as $course)
            <a href="{{url('student/attendance/all', $course)}}">
                <div class="course">
                    <h4>{{$course->code}}</h4>
                    <p>{{$course->title}}</p>
                </div>
            </a>
            {{-- onclick="show_attendance(this, {{$course}})" --}}
        @endforeach
            <style>
                .attendanceTableWrapper{
                    margin: 35px;
                    border-radius: 5px;
                    overflow: hidden;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
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
                    background: #7b0000c9;
                    color: white;
                    border-bottom: 1px solid rgb(9, 214, 170);
                }
        
            </style>
                    <div class="attendanceTableWrapper hide"  id="attendanceTableWrapper">
                        <div class="review" style="flex-direction:collumn;">
                            <div>
                                <p id="attendance_date"> </p>
                            </div>
                            <div>
                                <h4 id="attendance_course"> </h4>
                            </div>
                        </div>
                        
                        <div class="attendanceTableBody" id="attendanceTableBody_view">
  

                        </div>
                    </div>

        </div>
        <script>
            function show_attendance(e, data){
                let body = document.querySelector('.attendanceTableBody');
                let date = document.getElementById('attendance_date');
                let course = document.getElementById('attendance_course');

                let base_url = "http://127.0.0.1:8000/api";
                let api_endpoint = "/attendance/get_attendance";
                let date = "/13.12.23";
                let course_id = "1601"

                let url = base_url + api_endpoint + course_id + date;
                

                fetch(url, {
                    method: "POST",
                    body: JSON.stringify(data),
                    headers: {
                        "Content-Type" : "application/json;charset = UTF-8"
                    }
                }).then(res => res.json()).then(json=> {
                    date.innerHTML = '';
                    course.innerHTML = '';
                    body.innerHTML = '';
                    date.innerHTML = 'Date : '+ json[0].date;
                    course.innerHTML = e.children[1].innerHTML;

                    json.forEach(att => {
                        div = document.createElement('div');
                        btn = document.createElement('button');
                        btn.innerHTML = (att.student_id).substring(8, 10);
                        if (att.status == '0') {
                            btn.className = 'absent';
                        }
                        div.appendChild(btn); 
                        body.appendChild(div);
                    });
                    
                    document.getElementById('attendanceTableWrapper').classList.remove('hide');
                });
            }
        </script>
@endsection


