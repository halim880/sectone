

<div class="avatar" style="display: flex;">
    <div>
        <img src="{{asset('image/student/'.Auth::user()->student->image)}}" alt="" class="responsive-img">
    </div>
    <div class="">
        <a href=""><h6 class="grey-text">{{ Auth::user()->name }}</h6></a>
        <span class="orange-text" onclick="logout('admin_logout_form')" style="cursor: pointer">Logout</span>
        <form id="admin_logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
<ul>
    <a href="{{URL::to('student/home')}}">
        <i class="material-icons prefix">home</i> 
        <p style="margin-left: 20px;">Home</p>
    </a> 
    <a href="{{URL::to('student/form/create')}}">
        <i class="material-icons prefix">feed</i> 
        <p style="margin-left: 20px;">Form Fillup</p>
    </a> 
    <a href="{{URL::to('student/attendance')}}">
        <i class="material-icons prefix">file_copy</i> 
        <p style="margin-left: 20px;">Attendane</p>
    </a>
    <a href="{{URL::to('student/library/books')}}">
        <i class="material-icons prefix">local_library</i>  
        <p style="margin-left: 20px;">Library</p>
    </a> 
    <a href="{{URL::to('student/results')}}">
        <i class="material-icons">note</i> 
        <p style="margin-left: 20px;">Result</p>
    </a>
    <a href="{{URL::to('student/hostel')}}">
        <i class="material-icons">house</i> 
        <p style="margin-left: 20px;">Hostel</p>
    </a> 
    <a href="{{route('page.home')}}">
        <i class="material-icons">school</i> 
        <p style="margin-left: 20px;">Web</p>
    </a> 
</ul>

