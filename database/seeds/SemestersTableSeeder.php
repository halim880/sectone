<?php

use Illuminate\Database\Seeder;
use App\Models\Semester;
class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::truncate();
        $semesters = [
            ['name'=> '1st year 1st semester', 'short_form'=>'1/1'],
            ['name'=> '1st year 2nd semester', 'short_form'=>'1/2'],
            ['name'=> '2nd year 1st semester', 'short_form'=>'2/1'],
            ['name'=> '2nd year 2nd semester', 'short_form'=>'2/2'],
            ['name'=> '3rd year 1st semester', 'short_form'=>'3/1'],
            ['name'=> '3rd year 2nd semester', 'short_form'=>'3/2'],
            ['name'=> '4th year 1st semester', 'short_form'=>'4/1'],
            ['name'=> '4th year 2nd semester', 'short_form'=>'4/2'],
        ];

        $id = 101;
        foreach ($semesters as $semester) {
            Semester::create([
                'id'=> $id,
                'name'=> $semester['name'],
                'short_form'=> $semester['short_form'],
            ]);
            $id++;
        }
    }
}
