@extends('layouts.app');

@section('content')
<div class="EventContainer">
    <h1>Recent Events</h1>
    <div class="EventCards">
        @foreach ($events as $event)
        <div class="EventCard">
            <div class="cardImage">
                <img src="{{asset('image/event/'. $event->image)}}" alt="">
            </div>
            <div class="CardHeader">
                <h3>{{$event->title}}</h3>
            </div>
            <div class="CardDescription">
                <p>
                    {{$event->description}}
                </p>
            </div>
            <div class="cardbtn">
                <button>Read more</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection