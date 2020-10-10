@extends('layouts.admin.admin')


@section('content')
<div class="container card" style="padding: 27px">
    <div class="row">
        <h4>Edit Student</h4>
    </div>
    <div class="row">
        <form action="{{route("admin.student.update", $student)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="name" value ="{{$student->name}}" id="name">
                        <label for="name">Name </label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="email" value ="{{$student->email}}" id="email">
                        <label for="email">Email </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <select name="department" id="department">
                            <option value="101" @if ($student->department->id == 101) selected @endif>Computer Science & Engineering</option>
                            <option value="102" @if ($student->department->id == 102) selected @endif>Electrical & Electronics Engineering</option>
                            <option value="103" @if ($student->department->id == 103) selected @endif>Civil Engineering</option>
                        </select>
                        <label for="department">Department</label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="registration" value ="{{$student->id}}" id="registration">
                        <label for="registration">Registration </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <select name="semester" id="semester">
                            @foreach ($semesters as $semester)
                                <option value="{{$semester->id}}" 
                                    @if ($student->semester->id == $semester->id) selected @endif>{{$semester->name}}
                                </option>
                            @endforeach
                        </select>
                        <label for="semester">Semester </label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="session" value ="{{$student->session}}" id="name">
                        <label for="name">Session </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="father_name" id="father_name" value="{{$student->mother_name}}">
                        <label for="father_name">Father's name</label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <input type="text"  name="mother_name" id="mother_name" value="{{$student->mother_name}}">
                        <label for="mother_name">Mother's name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="phone" id="phone" value="{{$student->mother_name}}">
                        <label for="phone">Phone</label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <p>Image</p>
                        <input type="file"  name="image" id="image" value="{{$student->image}}">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
                    <div class="input-field">
                        <input type="text" name="current_address" id="current_address" value="{{$student->current_address}}">
                        <label for="current_address">Current Address</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
                    <div class="input-field">
                        <input type="text" name="parmenant_address" id="permanent_address" value="{{$student->permanent_address}}">
                        <label for="permenent_address">Permanent Address</label>
                    </div>
                </div>
            </div>
            <div class="card-action center-align">
                <button class="btn orange">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection



























{{-- @section('content')
    <form action="{{url('admin/member/update', $student)}}" id="member_update_form" method="POST">
        @csrf
    <div class="member_form">
            <div class="personal_info">
                <div class="heading">
                    <h1>Personal Information</h1>
                </div>
                <div class="body">
                    <div class="full_name">
                        <label for="">Full Name : </label>
                        <input type="text" name="name" value="{{$student->user->name}}">
                    </div>
                    <div class="phone_number">
                        <label for="">Phone Number : </label>
                        <input type="text" name="phone" value="{{$student->phone}}">
                    </div>
                    <div class="email">
                        <label for="">Email : </label>
                        <input type="text" name="email" value="{{$student->user->email}}">
                    </div>
                    <div class="blood_group">
                        <label for="">Blood Group : </label>
                        <input type="text" name="blood_group" value="{{$student->blood_group}}">
                    </div>
                    <div class="fathers_name">
                        <label for="">Fathers Name : </label>
                        <input type="text" name="father_name" value="{{$student->father_name}}">
                    </div>
                    <div class="mothers_name">
                        <label for="">Mothers Name : </label>
                        <input type="text" name="mother_name" value="{{$student->mother_name}}">
                    </div>
                </div>
                <div class="nextBtn"><button onclick="Next('.academic')">Next</button></div>
            </div>

            <div class="academic hide">
                <div class="heading">
                    <h1>Academic Information</h1>
                </div>
                <div class="body">
                    <div class="university">
                        <label for="">University</label>
                        <input type="text" name="university" value="{{$student->university}}">
                    </div>
                    <div class="department">
                        <label for="">Department : </label>
                        <input type="text" name="department" value="{{$student->department}}">
                    </div>
                    <div class="session">
                        <label for="">Session</label>
                        <input type="text" name="session" value="{{$student->session}}">
                    </div>
                    <div class="college">
                        <label for="">College/Madrasah</label>
                        <input type="text" name="college" value="{{$student->college}}">
                    </div>
                    <div class="high_school">
                        <label for="">High School : </label>
                        <input type="text" name="high_school" value="{{$student->high_school}}">
                    </div>
                </div>
                <div class="nextBtn"><button onclick="Next('.address')">Next</button></div>
            </div>

            <div class="address hide">
                <div class="heading">
                    <h1>Address</h1>
                </div>
                <div class="body">
                    <div class="address">
                        <label for="">Permanent Address : </label>
                        <input type="text" name="address" value="{{$student->address}}">
                    </div>
                    <div class="parmanent_address">
                        <label for="">Current Address : </label>
                        <input type="text" name="current_address" value="{{$student->current_address}}">
                    </div>
                </div>
                <div class="nextBtn"><button onclick="form_submit('member_update_form')">Submit</button></div>
            </div>
        </div>
    </form>
    <script>

        document.getElementById('member_update_form').addEventListener('submit', (e)=>{
            e.preventDefault();
        });
        function Next(className){
            let classes = ['.personal_info', '.academic', '.address']
            for (let i = 0; i < classes.length; i++) {
                document.querySelector(classes[i]).classList.add('hide');
            }
            document.querySelector(className).classList.remove('hide');
        }
    </script>
@endsection --}}
