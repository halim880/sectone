@extends('layouts.app');

@section('content')
    <div class="wrapper">
        <div class="session"><h2>Session : 2016-2017</h2></div>
        <div class="members">
            @foreach ($members as $member)
            <div class="member" id="{{2}}" onclick="showSingleMember(this.id)">
                <div class="image"><img src="{{asset('image/'.$member->user->image)}}" alt=""></div>
                <div class="name"><h4>{{$member->user->name}}</h4></div>
                <div class="details">
                    <div class="department"> 
                        <div class="title">Dept. :</div> 
                        <div class="info"> {{$member->department}}</div>
                    </div>
                    <div class="department"> 
                        <div class="title">Inst. :</div> 
                        <div class="info"> {{$member->university}}</div>
                    </div>
                </div>
            </div>   
            @endforeach
        </div>
    </div>

@endsection;
