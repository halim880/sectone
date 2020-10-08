<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Role;
use App\Models\Student;
use App\Models\Semester;
class StudentsTableSeeder extends Seeder
{
    private $role;
    private $courses;

    public function __construct(){
        $this->role = Role::select('id')->where('name', 'student')->get()->first();
        $this->courses = [1601, 1602, 1603, 1604, 1605, 1606, 1607, 1608, 1609];
        $this->sem5_courses = [1501, 1502, 1503, 1504, 1505, 1506, 1507, 1508, 1509];
    }

    public function run()
    {
            $students = Student::all();

            // Delete all students from users table if exist.
            foreach ($students as $student) {
                 if($student->user) {
                    $student->user->roles()->detach();
                    $student->user->delete();
                 }
            }
            
            // First truncate the students table.
            Student::truncate();
            $images = glob(public_path('image/student/*'));
            foreach($images as $image){
                if (file_exists($image)) {
                     unlink($image);
                }
            }

            // Create Custom Student for logging as a Student to Student dashboard.
            $this->custom_student();

            

            // Make 40 users using factory who will have the role of student.
            $users = factory(User::class, 40)->make();

            // Students registration number will start from 2016331501.
            $reg = 2016331502;
            // Save 40 students for CSE department.
            foreach ($users as $user) {
                $student = factory(Student::class)->make();
                $student->id = $reg++;
                $user->save();
                $user->roles()->attach($this->role);
                $semester = Semester::find(106);
                $student->courses()->sync($this->courses);
                $student->semester_id = 106;
                $student->department_id = 101;
                $user->student()->save($student);
            }
            
            // Save 40 students for EEE department
            $users = factory(User::class, 40)->make();
            $reg = 2017331501;
            foreach ($users as $user) {
                 $student = factory(Student::class)->make();
                 $student->id = $reg++;
                 $user->save();
                 $user->roles()->attach($this->role);
                 $student->courses()->sync($this->sem5_courses);
                 $student->semester_id = 105;
                 $student->department_id = 101;
                 $user->student()->save($student);
            }
    }

    public function custom_student(){
        $user = new User;
        $user->name = "Student";
        $user->email = "student@gmail.com";
        $user->password = Hash::make("password");
        $user->save();

        $student = factory(Student::class)->make();
        

        $student->id = 2016331501;
        $user->roles()->attach($this->role);
        $student->courses()->sync($this->courses);
        $student->semester_id = 106;
        $student->department_id = 101;
        $user->student()->save($student);
    }
}
