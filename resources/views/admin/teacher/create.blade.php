@extends('layouts.admin.admin')


@section('content')
<div class="container card" style="padding: 27px">
    <div class="row">
        <h4>Add New Teacher</h4>
    </div>
    <div class="row">
        <form action="{{route("admin.student.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="name" id="name">
                        <label for="name">Name </label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="email" id="email">
                        <label for="email">Email </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <select name="department" id="department">
                            <option value="101" selected>Computer Science & Engineering</option>
                            <option value="102" >Electrical & Electronics Engineering</option>
                            <option value="103">Civil Engineering</option>
                        </select>
                        <label for="department">Department</label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="registration" id="registration">
                        <label for="registration">Registration </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="father_name" id="father_name">
                        <label for="father_name">Father's name</label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <input type="text"  name="mother_name" id="mother_name">
                        <label for="mother_name">Mother's name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div class="input-field">
                        <input type="text" name="phone" id="phone">
                        <label for="phone">Phone</label>
                    </div>
                </div>
                <div class="col m6">
                    <div class="input-field">
                        <p>Image</p>
                        <input type="file"  name="image" id="image">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
                    <div class="input-field">
                        <input type="text" name="current_address" id="current_address">
                        <label for="current_address">Current Address</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
                    <div class="input-field">
                        <input type="text" name="permanent_address" id="permanent_address">
                        <label for="permanent_address">Permanent Address</label>
                    </div>
                </div>
            </div>
            <div class="card-action center-align">
                <button class="btn orange">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection

