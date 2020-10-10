@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="carousel carousel-slider center">
            <div class="carousel-fixed-item center">
                {{-- <a class="btn waves-effect white grey-text darken-text-2">button</a> --}}
            </div>

            @foreach ($images as $image)
                <div class="carousel-item" href="{{$image->id}}" style="background-image: url({{asset('image/slider/'.$image->img)}})">
                    <div class="carousel-content">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        
        <div class="row card-panel">
            
            <div class="col s12 m4">
              <div class="card principal center-align z-depth-0">
                <img src="{{asset('image/propic.jpg')}}" alt="" class="responsive-img circle">
                <h5>Abdul Halim</h5>
                <p>Principal</p>
              </div>
            </div>
            <div class="col s12 m8">
                <div class="row center-align">
                    <h5>About Sectcone</h5>
                </div>
                <p class="black-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus neque veniam aut molestiae reprehenderit nobis iure quasi ea libero ducimus distinctio, blanditiis quibusdam, dolore, odio porro nihil corrupti hic beatae repudiandae. Veniam mollitia assumenda, vitae aspernatur esse ad impedit animi nihil non error nam debitis at exercitationem quas sequi! Excepturi.
                </p>
                <p class="black-text">I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                </p>
            </div>
          </div>
    </div>

    <div class="container">
        
        <div class="row card">
            <h3 class="center card-title" style="padding-top: 40px;  !important">Recent events</h3>
            @foreach ($events->chunk(3) as $evnts)
            @foreach ($evnts as $event)
                <div class="col s12 m4 EventCard">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="{{asset('image/event/'. $event->image)}}" alt="">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{$event->title}}<i class="material-icons right">more_vert</i></span>
                        </div>
                    </div>
            </div>
            @endforeach
            @endforeach
        </div>
        
    </div>

@endsection


    <style>
        .principal{
            overflow: hidden;
        }
        .principal img{
            height: 150px;
            width: 150px;
            border: 5px solid yellowgreen;
            border-radius: 50%;
        }
        .carousel-item{
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        /* .EventCard{
            height: 350px;
        } */
        .EventCard .card{
            height: 350px;
            transition: 0.7s;
        }
        .EventCard .card:hover{
            transform : scale(1.1);
        }
        .EventCard .card img{
            height: 200px;
        }
    </style>