

@extends('layouts.student')

@section('content')

<div class="review-form-wrapper">
    <h5 align="center">Apply for review</h5>
    <form action="" method="post">
        <label for="">Course code
            <input type="text" name="course_id" id="" placeholder="CSE103">
        </label>

        <label for="">Note</label>
        <textarea name="note" id="" cols="30" rows="20"></textarea> 
        
        <br>
        <br>
        <div align="center">
            <a class="btn" href="{{URL::to('student/result/reivew-submit')}}">Submit</a>
        </div>
    </form>
</div>

@endsection

<style>
    .review-form-wrapper{
        background: rgb(252, 252, 252);
        margin: 10px;
        border: 1px solid grey;
        width: 300px;
        padding: 20px;
    }
    textarea{
        padding: 10px;
    }
</style>