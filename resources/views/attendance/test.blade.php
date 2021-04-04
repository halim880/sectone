
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button onclick="take_attendance()">Take New<</button>
    <div class="attendanceTableWrapper hide"  id="attendanceTableWrapper">
        <div class="review" style="flex-direction:collumn;">
            
            <div>
                <h4 id="attendance_course"> </h4>
            </div>

            <div>
                <p id="attendance_date"> </p>
            </div>
        </div>
        
        <div class="attendanceTableBody" id="attendanceTableBody_view">


        </div>
        <div id="button"><button onclick="edit_attendance(this)">Edit Mode</button></div>
    </div>

    </div>
    <script>
    

    async function take_attendance(){
        localStorage.setItem('course_id', 102);
        localStorage.setItem('department_id', 11);
        let subbtn = document.getElementById('button');
        let body = document.querySelector('.attendanceTableBody');
        let date = document.getElementById('attendance_date');
        let course = document.getElementById('attendance_course');

        let students = await fetch('http://127.0.0.1:8000/api/attendance/get_students')
                .then(res => res.json())

        date.innerHTML = '';
        course.innerHTML = '';
        body.innerHTML = '';
        subbtn.innerHTML ='';
        course.innerHTML = `Hello`;
        students.forEach(student => {
            div = document.createElement('div');
            btn = document.createElement('button');
            btn.setAttribute('id', student.id);
            btn.setAttribute('onclick', 'isPresent(this)');
            students.push(student.id);
            btn.innerHTML = (JSON.stringify(student.id).substring(8,10));
            div.appendChild(btn); 
            body.appendChild(div);
        });
        let b = document.createElement('button');
        b.innerHTML = 'Submit';
        b.setAttribute('onclick', 'submit_attendance()');
        subbtn.appendChild(b);

        document.getElementById('attendanceTableWrapper').classList.remove('hide');
        localStorage.setItem('students', students);

    }



    function isPresent(e){

        let students = JSON.parse(localStorage.getItem('attendanceList'));
        students.forEach(std => {
            if (std.id==e.id) {
                std.isPresent = std.isPresent?false:true;
                
                if(!std.isPresent) {
                    e.classList.add('absent');
                }
                else e.classList.remove('absent');
                console.log(std);
            }
        });
        
        localStorage.setItem('attendanceList', JSON.stringify(students))
    }


    async function submit_attendance(){
        let students = JSON.parse(localStorage.getItem('attendanceList'));

        let attendanceSheet = {
            course_id: 1234,
            department_id: 11,
            date: '12.12.23',
            attendance: students,
        }
        let res = await fetch('http://127.0.0.1:8000/api/attendance/save_attendance', {
                method: "POST",
                body: JSON.stringify(attendanceSheet),
                headers: {
                    "Content-Type" : "application/json;charset = UTF-8"
                }
            }).then(res => res.json())

        console.log(res);
    }
</script>

<style>
.date_div{
    height: auto;
    display: flex;
    flex-wrap: wrap;
    cursor: pointer;
}
.date_div .take_new,
.date_div .date{
    height: 50px;
    margin: 5px;
    width: 100px;
    display: flex;
    background: brown;
    align-items: center;
    justify-content: center;
    color: white;
    border-radius: 5px;
}
.date_div .take_new{
    background: #21635d;
}

.date_div .date.active{
    background: #0c7f80;
}
.attendanceTableWrapper{
    margin: 35px;
    border-radius: 5px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 300px;
}
.attendanceTableWrapper.hide{
    display: none;
}
.attendanceTableWrapper .title{
    padding: 20px;
    width: 300px;
    text-align: center;
    height: 100px;
    display: flex;
    align-items: center;
    background: #7b0000c9;
    color: white;
    border-bottom: 1px solid rgb(9, 214, 170);
}
.attendanceTableWrapper .title h3{
    text-align: center;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: capitalize;
}

.attendanceTableWrapper button{
    margin: auto;
    padding: 10px;
    width: 300px;
    color: white;
    border: none;
    border-radius: 0%;
    background: rgb(51, 6, 6);
    color: rgb(6, 198, 218);
}


.attendanceTableBody{

    height: 387;
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
    align-items: center;
    justify-items: center;
    background: #a90404;
}


.attendanceTableBody button{
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border: none;
    outline: none;
    padding: 10px;
    margin: 5px;
    cursor: pointer;
    background: rgb(9, 214, 170);
    color: rgb(0, 0, 0);
    border: 1px solid yellow;
    font-size: 20px;
}



/* button will be red when button pressed as absent */
.attendanceTableBody button.absent{
    background: rgb(224, 47, 47);
    color: white;
}
.review{
    padding-top: 10px;
    width: 300px;
    text-align: center;
    height: 100px;
    align-items: center;
    justify-content: center;
    background: #7b0000c9;
    color: white;
    border-bottom: 1px solid rgb(9, 214, 170);
}
.review>div{
    height: 35px;
}
</style>
</body>
</html>