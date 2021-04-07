<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssueBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issued_books')->truncate();

        $issue1 = [
            'student_id'=> 2016331501,
            'book_id'=> 1,
            'issue_date'=> '21.02.2021',
            'return_date'=> '30.02.2021',
            'status'=> 'active',
            'fine'=> 20,
        ];

        DB::table('issued_books')->insert($issue1);

        $issue2 = [
            'student_id'=> 2016331501,
            'book_id'=> 2,
            'issue_date'=> '21.02.2021',
            'return_date'=> '30.02.2021',
            'status'=> 'active',
            'fine'=> 20,
        ];
        DB::table('issued_books')->insert($issue2);

    }
}
