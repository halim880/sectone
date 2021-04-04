@extends('layouts.student')

@section('content')
        <style>
            .date_div{
                height: auto;
                display: flex;
                flex-wrap: wrap;
                cursor: pointer;
            }
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
            .date_div .date.active{
                background: #0c7f80;
            }
        </style>

        <div class="date_div">
            @foreach ($attendance as $date => $data)
                <div class="date" onclick="show_attendance(this)">
                    <p> {{$date}}</p>
                </div>
            @endforeach
        </div>
            <div class="testing">

            </div>

        <style>
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
                </div>

        </div>
        <script>
        async function show_attendance(e){
            let data = await fetch('http://127.0.0.1:8000/api/attendance/get_attendance/1601/13.12.23')
                            .then(res => res.json());

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
                btn.innerHTML = (att.student_id).substring(8, 10);
                if (att.status == '0') {
                    btn.className = 'absent';
                }
                div.appendChild(btn); 
                body.appendChild(div);
            });
            document.getElementById('attendanceTableWrapper').classList.remove('hide');
        }
        </script>
@endsection