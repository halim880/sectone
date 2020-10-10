@extends('layouts.admin.admin')

@section('content')
<div class="row">
    <a href="{{URL::to('admin/students')}}">
         <div class="col s6 m3">
             <div class="card-panel center-align hoverable">
                 <h5 class="teal-text text-darken-2">Students</h5>
                 <h5 class="pink-text text-lighten-2">598</h5>
             </div>
         </div>
    </a>
    
    <a href="{{URL::to('admin/teachers')}}">
         <div class="col s6 m3">
             <div class="card-panel center-align hoverable">
                 <h5 class="teal-text text-darken-2">Teachers</h5>
                 <h5 class="pink-text text-lighten-2">48</h5>
             </div>
         </div>
    </a>

     <a href="{{URL::to('admin/stuffs')}}">
         <div class="col s6 m3">
             <div class="card-panel center-align hoverable">
                 <h5 class="teal-text text-darken-2">Stuffs</h5>
                 <h5 class="pink-text text-lighten-2">25</h5>
             </div>
         </div>
     </a>

     <a href="{{URL::to('admin/hostel')}}">
         <div class="col s6 m3">
             <div class="card-panel center-align hoverable">
                 <h5 class="teal-text text-darken-2">Hostel</h5>
                 <h5 class="pink-text text-lighten-2">03</h5>
             </div>
         </div>
     </a>

     <a href="{{URL::to('admin/library')}}">
         <div class="col s6 m3">
             <div class="card-panel center-align hoverable">
                 <img src="{{asset('image/icons/book.png')}}" alt="" class="responsive-img" style="height: 50px; width: 50px;">
                 <h5 class="teal-text text-darken-2">Library</h5>
             </div>
         </div>
     </a>

 </div>
@endsection