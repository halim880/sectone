

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
    <a href="{{URL::to('student/form/create')}}">
        <i class="material-icons prefix">dashboard</i> 
        <p style="margin-left: 20px;">Form Fillup</p>
    </a> 
    <a href="{{URL::to('student/attendance')}}">
        <i class="material-icons prefix">book</i> 
        <p style="margin-left: 20px;">Attendane</p>
    </a>
    <a href="{{URL::to('student/library/books')}}">
        <i class="material-icons prefix">house</i>  
        <p style="margin-left: 20px;">Library</p>
    </a> 
    <a href="{{URL::to('admin/students')}}">
        <i class="material-icons">school</i> 
        <p style="margin-left: 20px;">Hostel</p>
    </a>
    <a href="{{URL::to('admin/students')}}">
        <i class="material-icons">school</i> 
        <p style="margin-left: 20px;">Hostel</p>
    </a> 
    <a href="{{route('page.home')}}">
        <i class="material-icons">school</i> 
        <p style="margin-left: 20px;">Web</p>
    </a> 
</ul>

