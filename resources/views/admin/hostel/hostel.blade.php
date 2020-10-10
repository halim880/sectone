@extends('layouts.admin.admin')
@section('content')
    
    <div class="hostels">
        <div class="hostel_header row">
            <div class="col s4 m3 l2">
                <div class="card center-align teal grey-text text-lighten-3" onclick="showInfo('muktijudda_hall')">
                    <p>Muktijuddha Hall</p>
                </div>
            </div>
            <div class="col s4 m3 l2">
                <div class="card center-align teal grey-text text-lighten-3" onclick="showInfo('shadhinota_hall')">
                    <p>Shadhinata Hall</p>
                </div>
            </div>
            <div class="col s4 m3 l2">
                <div class="card center-align teal grey-text text-lighten-3">
                    <p>Muktijuddha Hall</p>
                </div>
            </div>
        </div>

        <div id="container">
            
        </div>

        <div id="muktijudda_hall" class="col s12" style="display: none;">
            <div class="row">
                <div class="col s12 m4 l3">
                    <div class="card z-depth-0">
                        <ul class="collection with-header">
                            <li class="collection-header center-align teal lighten-3">Hostel Info. </li>
                            <li class="collection-item">Total Rooms : 43</li>
                            <li class="collection-item">Total Sits : 144</li>
                            <li class="collection-item">Available Sits: 5</li>
                          </ul>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <div class="card">
                        <div class="card-title center-align card teal grey-text text-lighten-5" style="height: 60px">
                            Hostel Students
                        </div>
                        <div class="row hostel-students">
                            <input class="col_2" type="text" placeholder="Search by name" id="student_name" onkeyup="searchByName()">
                            @foreach ($members as $member)
                                <a href="{{url('admin/hostel/member', $member)}}">
                                    <div class="col s4 m3 l3 center-align">
                                        <div class="card hostel-student">
                                            <img src="{{asset('image/student/'.$member->student->image)}}" alt="">
                                            <p class="name">{{$member->student->user->name}}</p>
                                            <p class="room">Room No. : {{$member->room_no}}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            @foreach ($members as $member)
                            <a href="{{url('admin/hostel/member', $member)}}">
                                <div class="col s4 m3 l3 center-align">
                                    <div class="card hostel-student">
                                        <img src="{{asset('image/student/'.$member->student->image)}}" alt="">
                                        <p class="name">{{$member->student->user->name}}</p>
                                        <p class="room">Room No. : {{$member->room_no}}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        </div>
                    </div>
                </div>

                <style>
                    .hostel-students{
                        height: 80vh;
                        overflow: auto;
                        padding: 20px;
                    }
                    .hostel-student{
                        height: 125px;
                        padding: 5px;
                        overflow: hidden;
                    }

                    .hostel-student img{
                        height: 65px;
                        width: 65px;
                        border: 3px solid teal;
                        border-radius: 50%;
                    }
                    .hostel-student .room{
                        font-size: 10px !important;
                        color: grey;
                    }
                    .hostel-student .name{
                        font-size: 12px;
                    }
                </style>


                <div class="col s12 m4 l3">
                    <div class="card center-align">
                        <div class="card-title teal lighten-3">
                            <p>Warden</p>
                        </div>
                        <div class="proctor-card">
                            
                            <img src="{{asset('image/4557.jpg')}}" alt="">
                            <p class="name">Emma Watson</p>
                            <p class="title">Lecturer</p>
                            <p class="title">Computer Science & Engineering</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div id="shadhinota_hall" class="col s12" style="display: none;">
            <div class="row">
                <div class="col s12 m4 l3">
                    <div class="card z-depth-0">
                        <ul class="collection with-header">
                            <li class="collection-header center-align teal lighten-3">Hostel Info. </li>
                            <li class="collection-item">Total Rooms : 43</li>
                            <li class="collection-item">Total Sits : 150</li>
                            <li class="collection-item">Available Sits: 5</li>
                          </ul>
                    </div>
                </div>
                <div class="col s12 m4 l3">
                    <div class="card center-align">
                        <div class="card-title teal lighten-3">
                            <p>Proctor</p>
                        </div>
                        <div class="proctor-card">
                            
                            <img src="{{asset('image/4331.jpeg')}}" alt="">
                            <p class="name">Emma Watson</p>
                            <p class="title">Dept. Head</p>
                            <p class="title">Electrical & Electronics Engineering</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <script>


        function showInfo(e) {
            const container = document.getElementById('container');
            const info = document.getElementById(e);
            container.innerHTML = info.innerHTML;
        }

        window.onload = function() {
            showInfo('muktijudda_hall')
        }

        function searchByName(){
            let filter = document.getElementById('student_name').value;
            let names = document.querySelectorAll('.hostel-student .name');

            names.forEach(name => {
                check = name.innerHTML.toLowerCase();
                if (check.indexOf(filter.toLowerCase())>-1) {
                    name.parentNode.parentNode.style.display = '';
                }
                else{
                    name.parentNode.parentNode.style.display = 'none';
                }
            });
        }
    </script>
    
@endsection


<style>
    .hostel_header{
        border-bottom: 4px solid teal;
    }

    .proctor-card{
        padding: 15px;
        transition: 1s;
    }
    .proctor-card .card-title{
        margin-bottom: 10px;
    }


    .proctor-card img{
        height: 150px;
        width: 150px;
        margin-bottom: 10px;
        border-radius: 15px;
    }
    .proctor-card .title{
        color: rgb(148, 144, 144);
        font-size: 12px !important;
    }
    .hostel_header .card{
        font-size: 15px;
        padding: 20px;
        height: 60px;
        width: 100%;
        cursor: pointer;
    }

    .hostels .menu li{
        margin: 5px;
        background: #009688;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .hostel_details{
        width: 100%;
        background: #a5b5a6d4;
        display: flex;
        flex-direction: column;

    }
    .hostel_details .row{
        height: 25px;
        display: flex;
    }
    .hostel_details .col_1{
        width: 150px;
    }
    .hostel_details .col_2{
        width: 20px;
    }
    .hostel_details .col_3{
        width: auto;
    }

    table{
        border-collapse: collapse;
    }
    .col_1{
        width: 100px;
    }
    .col_2{
        width: 200px;
    }
    .col_3{
        width: 70px;
    }
    .col_4{
        width: 100px;
    }
    .col_5{
        width: 100px;
    }

    .col_2 li{
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin-top: 5px;
        border: 1px solid grey;
        cursor: pointer;
    }
    tr{
        border: 1px solid grey;
    }
    td{
        border: 1px solid grey;
        padding: 10px;
    }
    .search_box{
        display: flex;
        align-items: center;
        height: 50px;
    }
    .search_box input{
        padding: 4px 5px;
        margin-right:3px; 
    }

</style>
