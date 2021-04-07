@extends('layouts.student')

@section('content')

<div style="max-width: 500px; padding:20px; margin:20px; background:white">
    <h4 align="center" class="orange" style="color:white; padding:10px">Hostel Info</h4>
    <div>
        <table>
            <tr>
                <th>Hostel name</th>
                <td>:</td>
                <td>{{$hostel->hostel->name}}</td>
            </tr>
            <tr>
                <th>Room No.</th>
                <td>:</td>
                <td>{{$hostel->room_no}}</td>
            </tr>
            <tr>
                <th>Sit No.</th>
                <td>:</td>
                <td>{{$hostel->sit_no}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table class="striped light-grey">
            <thead class="green">
                <tr>
                    <th>Semester</th>
                    <th>Payment status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1st year 1st semester</th>
                    <td style="color: green">Payed</td>
                    <td><button class="btn grey" disabled>No action</button></td>
                </tr>
                <tr>
                    <th>1st year 2nd semester</th>
                    <td style="color: green">Payed</td>
                    <td><button class="btn grey" disabled>No action</button></td>
                </tr>
                <tr>
                    <th>2nd year 1st semester</th>
                    <td style="color: green">Payed</td>
                    <td><button class="btn grey" disabled>No action</button></td>
                </tr>
                <tr>
                    <th>2nd year 2ns semester</th>
                    <td style="color: green">Payed</td>
                    <td><button class="btn grey" disabled>No action</button></td>
                </tr>
                <tr>
                    <th>3rd year 1st semester</th>
                    <td style="color: red">Unpayed</td>
                    <td><button class="btn red">Pay now</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection