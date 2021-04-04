@extends('layouts.student')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col m3">
                <a href="">
                    <div class="card dashboard-card center-align orange white-text">
                        <h5>Attendance</h5>
                    </div>
                </a>
            </div>
            <div class="col m3">
                <a href="{{URL::to('student/form/create')}}">
                    <div class="card dashboard-card center-align orange white-text">
                        <h5>Form Fillup</h5>
                    </div>
                </a>
            </div>
            <div class="col m3">
                <a href="{{URL::to('student/library/books')}}">
                    <div class="card dashboard-card center-align orange white-text">
                        <h5>Library</h5>
                    </div>
                </a>
            </div>
            <div class="col m3">
                <a href="{{URL::to('student/hostel')}}">
                    <div class="card dashboard-card center-align orange white-text">
                        <h5>Hostel</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

<style scoped>
    .dashboard-card{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        width: 150px;
    }
</style>