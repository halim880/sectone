@extends('layouts.admin.admin')
@section('content')

<div class="container">
    <div class="card">
        <div class="row center-align card-header">
            <h4 style="padding-top: 20px;">Student Details</h4>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="book-card card z-depth-0">
                    <img src="{{asset('image/student/'.$student->image)}}" alt="" class="responsive-img">
                    <div class="center-align">
                        <h5>{{$student->name}}</h5>
                    </div>  
                </div>
            </div>
            <div class="col s12 m7">
                <div class="info">
                    <div>
                        <p>Academic info. </p>
                    </div>
                    <table class="striped">
                        <tr>
                            <td>Student id</td>
                            <td>:</td>
                            <td>{{$student->id}}</td>
                        </tr>
                        
                        <tr>
                            <td>Department</td>
                            <td>:</td>
                            <td>{{$student->department->name}}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td>{{$student->semester->name}}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td>{{$student->session}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            
        </div>
        <div class="row">
            <div class="col s10 m5">
                <div class="info">
                 <div>
                     <p>Personal information</p>
                 </div>
                 <table class="striped">
                     <tr>
                         <td>Father's Name</td>
                         <td>:</td>
                         <td>{{$student->father_name}}</td>
                     </tr>
                     
                     <tr>
                         <td>Mother's Name</td>
                         <td>:</td>
                         <td>{{$student->mother_name}}</td>
                     </tr>
                     <tr>
                         <td>Blood group</td>
                         <td>:</td>
                         <td>{{$student->blood_group}}</td>
                     </tr>
                 </table>
                 </div>
             </div>
             <div class="col s12 m6">
                <div class="info">
                 <div>
                     <p>Contact information</p>
                 </div>
                 <table class="striped">
                     <tr>
                         <td>Phone</td>
                         <td>:</td>
                         <td>{{$student->phone}}</td>
                     </tr>
                     
                     <tr>
                         <td>Email</td>
                         <td>:</td>
                         <td>{{$student->email}}</td>
                     </tr>
                     <tr>
                         <td>Permanent Address</td>
                         <td>:</td>
                         <td>{{$student->permanent_address}}</td>
                     </tr>
                 </table>
                 </div>
             </div>
             <div class="col s12 m6">
                <div class="info">
                 <div>
                     <p>Payment History</p>
                 </div>
                 <table class="striped">
                     <tr>
                         <td>Phone</td>
                         <td>:</td>
                         <td>{{$student->phone}}</td>
                     </tr>
                     
                     <tr>
                         <td>Email</td>
                         <td>:</td>
                         <td>{{$student->email}}</td>
                     </tr>
                     <tr>
                         <td>Permanent Address</td>
                         <td>:</td>
                         <td>{{$student->permanent_address}}</td>
                     </tr>
                 </table>
                 </div>
             </div>
        </div>

        <div class="card-action center-align">
            <a href="{{route('admin.student.edit', $student)}}">Edit</a>
            <form action="{{route('admin.student.destroy', $student)}}" method="post" style="display:inline;">
                @csrf
                @method("DELETE")
                <button class="btn orange">Remove</button>
            </form>
        </div>
</div>
</div>




@endsection


<style scoped>
    table {
        display: inline-block;
        margin: 10px;
        width: 100% !important;
    }
    table td{
        padding:10px !important;
    }
    .book-card{
        width: 100%;
        /* padding: 10px; */
        margin-top: 10px !important;
        margin-left: 20px !important;
    }
    .book-description{
        max-height: 250px;
        overflow: auto;
        margin: 10px;
        border: 1px solid rgb(223, 245, 252);
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        color: rgb(16, 70, 70);
    }
    .book-location{
        width: 200px;
        color: blueviolet;
    }
    .card-header::after{
        position: absolute;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        content: '';
        align-items: center;
        display: block;
        height: 2px;
        width: 200px;
        background: teal;
    }
    .info{
        padding: 10px;
    }
</style>