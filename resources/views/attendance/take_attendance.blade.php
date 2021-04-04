

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button onclick="printHello()">submit</button>
    <button onclick="submit_attendance()">submit</button>

    <div id="attendance_sheet_wrapper">

    </div>
</body>


<script>
    async function get_student_from_api(){
       let attendanceList = [];
        let students = await fetch('http://127.0.0.1:8000/api/attendance/get_students')
                    .then(res => res.json())

        students.forEach(std => {
            
            attendanceList.push({id: std.id, isPresent: true});
        });

        localStorage.setItem('studentsList', JSON.stringify(students))

        localStorage.setItem('attendanceList', JSON.stringify(attendanceList))

        attenance_table(students);
    }

    function printHello(){
        get_student_from_api();
    }

    function attenance_table(students){
        let div = document.getElementById('attendance_sheet_wrapper');
        students.forEach(student => {
            let button = document.createElement('button');
            button.setAttribute('id', student.id)
            button.setAttribute('onClick', 'isPresent(this)')
            button.innerHTML = student.id,
            div.appendChild(button);
        });
    }

    function isPresent(e){
        let students = JSON.parse(localStorage.getItem('attendanceList'));
        students.forEach(std => {
            if (std.id==e.id) {
                std.isPresent = std.isPresent?false:true;
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
</html>