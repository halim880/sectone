<?php

use App\Models\Academic\Course;
use App\Models\Academic\DropCourse;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DropCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DropCourse::truncate();

        $course1 = Course::where([
            'semester_id'=> 101,
            'department_id'=> 101,
            'course_code'=> 'CSE 101'
        ])->first();
        $student = Student::first();

        return DropCourse::create([
            'course_id'=> $course1->id,
            'student_id'=> $student->id,
        ]);
    }
}
