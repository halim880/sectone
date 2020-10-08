<?php

use Illuminate\Database\Seeder;
use App\Models\Hostel\Member;
class HostelMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::truncate();
        $members = [
            ['student_id'=>'2016331509', 'hostel'=>'2', 'room_no'=>'207', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111111'],
            ['student_id'=>'2016331510', 'hostel'=>'2', 'room_no'=>'207', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111112'],
            ['student_id'=>'2016331511', 'hostel'=>'2', 'room_no'=>'207', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111113'],
            ['student_id'=>'2016331512', 'hostel'=>'2', 'room_no'=>'208', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111114'],
            ['student_id'=>'2016331513', 'hostel'=>'2', 'room_no'=>'208', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111115'],
            ['student_id'=>'2016331514', 'hostel'=>'2', 'room_no'=>'208', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111116'],
            ['student_id'=>'2016331515', 'hostel'=>'2', 'room_no'=>'209', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111117'],
            ['student_id'=>'2016331516', 'hostel'=>'2', 'room_no'=>'209', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111118'],
            ['student_id'=>'2016331517', 'hostel'=>'2', 'room_no'=>'209', 'sit_no'=>'122071', 'admission_date'=>'12/01/2017', 'payment_id'=>'111119'],
        ];

        foreach ($members as $member) {
            Member::create([
                'student_id' => $member['student_id'],
                'hostel_id' => $member['hostel'],
                'room_no' => $member['room_no'],
                'sit_no' => $member['sit_no'],
                'admission_date' => $member['admission_date'],
                'payment_id' => $member['payment_id'],
            ]);
        }
    }
}
