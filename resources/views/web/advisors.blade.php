@extends('layouts.app');

@section('content')
    <div class="wrapper">
        <div class="members">
            @foreach ($advisors as $advisor)
                <div class="member" id="{{2}}" onclick="showSingleMember(this.id)">
                    <div class="image"><img src="{{asset('image/'.$advisor->user->image)}}" alt=""></div>
                    <div class="name"><h4>{{$advisor->user->name}}</h4></div>
                    <div class="details">
                        <div class="department"> 
                            <div class="title">Job. :</div> 
                            <div class="info">  {{$advisor->job}}</div>
                        </div>
                        <div class="department"> 
                            <div class="title">Loc. :</div> 
                            <div class="info"> {{$advisor->location}}</div>
                        </div>
                    </div>
                </div>  
            @endforeach
        </div>
    </div>
@endsection



