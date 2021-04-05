<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table td{
            padding: 3px;
        }
        h4{
            margin-top: 8px;
            margin-bottom: 6px;
        }
    </style>
</head>
<body>
    <div style="background: green; color:white;">
        <h3 align="center" style="padding: 10px">Registration Form</h3>
    </div>
    <div>
        <div>
            <div align="center">
                <img src="{{public_path('image/form/image/'. $form->image)}}" alt="" height="150" width="150">
            </div>
            
            <h4>Academic Info.</h4>
            <div>
                <table class="striped">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr>
                        <td>Registration No.</td>
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
                        <td>Session</td>
                        <td>:</td>
                        <td>{{$student->session}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <h4>Personal Info.</h4>
        <div>
            <table>
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
                    <td>A+</td>
                </tr>
            </table>
        </div>
        <h4>Contact Info.</h4>
        <div>
            <table>
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

        <h4>Current Courses</h4>
        <table class="table"  border="1" style="border-collapse: collapse">
            @foreach ($current_courses as $course)
                <tr>
                    <td style="padding: 5px 10px 5px 10px">{{$course->title}}</td>
                    <td style="padding: 5px 10px 5px 10px">{{$course->course_code}}</td>
                    <td style="padding: 5px 10px 5px 10px">{{$course->credit}}</td>
                </tr>
            @endforeach
        </table>
        <div>
            <h4>Signature</h4>
            <img src="{{public_path('image/form/sign/'. $form->sign)}}" alt="" height="50" width="150">
        </div>
    </div>
</body>
</html>