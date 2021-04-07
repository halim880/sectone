<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .header-table tr th{
            align-items: flex-start;
        }
        .header-table td,
        .header-table th{
            padding: 7px 10px;
        }
        table{
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table tr td{
            padding: 7px 15px;
            border: 1px dotted grey;
        }
        .table thead{
            background: rgb(85, 248, 107);
        }
        .table thead th{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="table-wrapper">
        <div style="background: green; padding:10px; color:rgb(255, 255, 255)">
            <h1 align="center">Sylhet Engineering College</h1>
            <h3 align="center">{{$student->semester_name}}</h3>
        </div>
            <table class="header-table">
                <tr>
                    <th align="start">Name</th> <br>
                    <td>:</td>
                    <td>{{$student->name}}</td>
                </tr>
                <tr>
                    <th align="start">Registration : </th>
                    <td>:</td>
                    <td>{{$student->id}}</td>
                </tr>
                <tr>
                    <th align="start">Department.: </th>
                    <td>:</td>
                    <td>{{$student->department_name}}</td>
                </tr>
                <tr>
                    <th align="start">Session :</th>
                    <td>:</td>
                    <td>{{$student->session}}</td>
                </tr>
            </table>
            <hr>
            <div align="center">
                <table class="table" align="center">
                    <thead>
                        <tr>
                            <th align="start">Course title</th>
                            <th align="start">Point</th>
                            <th align="start">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                            <tr>
                                <td>{{$result->course->title}}</td>
                                <td style="width: 100px;" align="right">{{$result->point}}</td>
                                <td style="width: 100px;" align="right">{{$result->grade}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>