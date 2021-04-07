


@extends('layouts.student')

@section('content')

<div class="table-wrapper">
    <div style="background: green; padding:10px; color:rgb(255, 255, 255)">
        <h5 align="center">Sylhet Engineering College</h5>
        <h6 align="center">{{$student->semester_name}}</h6>
    </div>
    @if (count($results)>1)
        <table class="header-table">
            <tr>
                <th>Name</th>
                <td>:</td>
                <td> {{$student->name}}</td>
            </tr>
            <tr>
                <th>Registration</th>
                <td>:</td>
                <td>{{$student->id}}</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>:</td>
                <td>{{$student->department_name}}</td>
            </tr>
            <tr>
                <th>Session</th>
                <td>:</td>
                <td>{{$student->session}}</td>
            </tr>
        </table>
        <table class="table">
            <thead>
                <th>Course title</th>
                <th>Point</th>
                <th>Grade</th>
            </thead>
            @foreach ($results as $result)
                <tr>
                    <td>{{$result->course->title}}</td>
                    <td>{{$result->point}}</td>
                    <td>{{$result->grade}}</td>
                </tr>
            @endforeach
        </table>
        <div align="center" style="margin-top: 20px">
            <a href="{{URL::to('student/result/apply-for-review', $student)}}" class="btn btn-primary">Apply for review</a>
            <a href="{{URL::to('student/result/pdf/101/106')}}" class="btn orange">Download PDF</a>
        </div>
    @else
        <h4>Result not Published</h4>
    @endif
</div>



@endsection

<style>

    .table-wrapper{
        padding: 20px;
        border: 1px solid grey;
        max-width: 500px;
        margin: 10px;
    }
    .header-table td,
    .header-table th,{
        padding: 5px;
    }
    table{
        border-collapse: collapse;
        border: 1px solid grey;
        width: 500px;
    }
    table thead{
        background: rgb(150, 189, 150);
    }
    table tr td{
        padding: 5px 10px;
    }
</style>