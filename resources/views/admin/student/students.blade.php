
@extends('layouts.admin.admin')

@section('content')
<div class="col s12 m8 l8">
    <div class="card">
        <div class="card-title center-align card teal grey-text text-lighten-5" style="height: 60px">
            All Students
        </div>
        <div class="row hostel-students">
            <input class="col_2" type="text" placeholder="Search by name" id="student_name" onkeyup="searchByName()">
            @foreach ($students as $student)
                <a href="{{route('admin.student.show', $student)}}">
                    <div class="col s4 m3 l3 center-align">
                        <div class="card hostel-student">
                            <img src="{{asset('image/student/'.$student->image)}}" alt="">
                            <p class="name">{{$student->name}}</p>
                            {{-- <p class="room">Dept. : {{$student->department->short_form}}</p>                         --}}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
<div class="col m3">
    <a href="{{route('admin.student.create')}}" class="btn red lighten-3">Add New Student</a>
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


