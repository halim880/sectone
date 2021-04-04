<?php

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        Course::truncate();
        $semesters = [
                [
                    'semester'=>1,
                    'courses'=> [
                        ['title'=>'Introduction to Computer Science', 'course_code'=>'CSE 101', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'101'],
                        ['title'=>'Introduction to Computer Science(Sessional)', 'course_code'=>'CSE 102', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'101'],
                        ['title'=>'Physics', 'course_code'=> 'PHY 101', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'101'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'101'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'101'],
                        ['title'=>'Mechanical Engineering', 'course_code'=> 'ME 101', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'101'],
                        ['title'=>'Mechanical Engineering (Sessional)', 'course_code'=> 'ME 102', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'101'],
                    ]
                ],
                [
                    'semester'=>2,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'102'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'102'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'102'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'102'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'102'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'102']
                    ]
                ],
                [
                    'semester'=>3,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'103']
                    ]
                ],
                [
                    'semester'=>4,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'103'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'103']
                    ]
                ],
                [
                    'semester'=>5,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'104'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'104'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'104'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'104'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'104'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'104']
                    ]
                ],
                [
                    'semester'=>6,
                    'courses'=> [
                        ['title'=>'Compiler Design', 'course_code'=>'CSE 601', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'105'],
                        ['title'=>'Compiler Design (Sessional)', 'course_code'=>'CSE 602', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'105'],
                        ['title'=>'Networking', 'course_code'=> 'CSE 603', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'105'],
                        ['title'=>'Networking (Sessional)', 'course_code'=> 'CSE 604', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'105'],
                        ['title'=>'Software Engineering', 'course_code'=> 'CSE 605', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'105'],
                        ['title'=>'software Engineering (Sessional)', 'course_code'=> 'CSE 606', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'105'],
                        ['title'=>'Concrete Mathmetics', 'course_code'=> 'CSE 607', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'105'],
                        ['title'=>'Numerical Methods', 'course_code'=> 'CSE 609', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'105'],
                        ['title'=>'Numerical Methods (Sessional)', 'course_code'=> 'CSE 609', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'105']
                    ]
                ],
                [
                    'semester'=>7,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'106'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'106'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'106'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'106'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'106'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'106']
                    ]
                ],
                [
                    'semester'=>8,
                    'courses'=> [
                        ['title'=>'Programming with c', 'course_code'=>'CSE 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'108'],
                        ['title'=>'Programming with c', 'course_code'=>'CSE 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'108'],
                        ['title'=>'Chemistry', 'course_code'=> 'CHY 201', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'108'],
                        ['title'=>'Chemistry (Sessional)', 'course_code'=> 'CHY 202', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'108'],
                        ['title'=>'Physics (Sessional)', 'course_code'=> 'PHY 102', 'credit'=>'3.00','department_id'=> '101', 'semester_id'=>'108'],
                        ['title'=>'Mechanical Drawing', 'course_code'=> 'ME 101', 'credit'=>'1.50','department_id'=> '101', 'semester_id'=>'108']
                    ]
                ],
            ];
        $sem = 101;
        foreach ($semesters as $semester) {
            
            foreach($semester['courses'] as $course){
                $cor = Course::create([
                    'title'=>$course['title'],
                    'course_code'=>$course['course_code'],
                    'credit'=>$course['credit'],
                    'department_id'=> $course['department_id'],
                    'semester_id'=> $course['semester_id'],
                ]);
            }
        }

    }
}
