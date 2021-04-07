@extends('layouts.student')

@section('content')

<a class =" btn btn-secondary" href="{{url('student/result/term_test')}}">Semester final</a>


<div class="results-wrapper">
    <div class="semester-final-results">
        <h4>Semester final results</h4>
        <div>
            <a href="{{URL::to('student/result/single-result/101/101')}}">First Semester</a>
        </div>
        <div>
            <a href="{{URL::to('student/result/single-result/101/102')}}">Second Semester</a>
        </div>
        <div>
            <a href="{{URL::to('student/result/single-result/101/103')}}">Third Semester</a>
        </div>
        <div>
            <a href="{{URL::to('student/result/single-result/101/104')}}">Fourth Semester</a>
        </div>
        <div>
            <a href="{{URL::to('student/result/single-result/101/105')}}">Fifth Semester</a>
        </div>
        <div>
            <a href="{{URL::to('student/result/single-result/101/106')}}">Sixth Semester</a>
        </div>
        <div>
            <a href="{{URL::to('student/result/single-result/101/107')}}">Seventh Semester</a>
        </div>
        <div>
            <a href="{{URL::to('student/result/single-result/101/108')}}">Eighth Semester</a>
        </div>
    </div>
    <div class="term-test-results">
        <h4>Term test results</h4>
        <div>
            <a href="">First Semester</a>
        </div>
        <div>
            <a href="">Second Semester</a>
        </div>
        <div>
            <a href="">Third Semester</a>
        </div>
        <div>
            <a href="">Fourth Semester</a>
        </div>
        <div>
            <a href="">Fifth Semester</a>
        </div>
        <div>
            <a href="">Sixth Semester</a>
        </div>
        <div>
            <a href="">Seventh Semester</a>
        </div>
        <div>
            <a href="">Eighth Semester</a>
        </div>
    </div>
</div>



<a class =" btn btn-secondary" href="{{url('student/result/semester_final')}}">Term test</a>

<style>
    .results-wrapper{
        display: flex;
    }
    .term-test-results,
    .semester-final-results{
        background: rgb(255, 253, 253);
        margin: 10px;
        width: 350px;
        padding: 10px;
        border: 1px solid grey;
    }
    .term-test-results> div,
    .semester-final-results > div{
        border-top: 1px solid rgb(158, 184, 120);
        padding: 10px;
    }
    
</style>
@endsection