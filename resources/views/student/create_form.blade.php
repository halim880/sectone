@extends('layouts.student')


@section('content')
    <div class="container">
            
            <div class="card" style="padding: 15px;">
                <div class="row center-align orange">
                    <h4>Registration Form</h4>
                </div>
                <div id="second_part">
                    

                    {{-- Image and Signature Field --}}
                    <form action="{{URL::to('student/form/submit')}}" method="post" id="registration_form" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="registration_number">Student ID No.:</label>
                            <input type="text" value="{{$student->id}}">
                        </div>
                        <div>
                            <div>
                                <input type="file"  name="image" id="myImg">
                                <img src="{{asset('image/form/image/default.png')}}" id="image_canvas" alt="" width="150" height="150">
                            </div>
                            <div>
                                <input type="file" id="sign" name="sign">
                                <img src="{{asset('image/form/sign/default.jpg')}}" id="sign_canvas" alt="" width="150" height="50">
                            </div>
                        </div>
                        <div class="row center-align">
                            <button class="btn orange">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

    </div>
@endsection

<script>
    // async function drop_courses(id) {
    //     let drop_courses = await fetch("http://127.0.0.1:8000/api/student/form/drop_courses/2016331501").then(res => res.json());
    //     const table = document.getElementById('drop_courses_table');

    //     drop_courses.forEach(course => {

    //         let tr = `
    //             <div>
    //                 <button class="btn-floating waves-effect waves-light" onclick ="add_course(this,`+ course.id +`)"><i class="material-icons">add</i></button>
    //                 <span>`+ course.course_code +`</span>
    //             </div>
    //         `
    //         table.innerHTML = tr;
    //     });
    // }

    

    window.addEventListener('load', function() {

        document.getElementById('myImg').addEventListener('change', function () {
            if (this.files && this.files[0]) {
                let img = document.getElementById('image_canvas');
                img.src = URL.createObjectURL(this.files[0]);
            }
        })

        document.getElementById('sign').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                let sign = document.getElementById('sign_canvas');
                sign.src = URL.createObjectURL(this.files[0]);
            }
        })
    })

    // let list = [];
    // function add_course(e, id) {
    //     list.push(id);
    //     e.innerHTML = '<i class="material-icons">done</i>';
    //     console.log(list);
    // }

    // async function submit(e) {
    //     document.getElementById('registration_form').submit;
    // }
</script>

<style>
    #second_part .title{
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
</style>
