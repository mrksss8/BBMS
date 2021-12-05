<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residents')->insert([
            'res_num' => '123',
            'last_name' => 'Bautista',
            'first_name' => 'Mark Anthony',
            'middle_name' => 'Noza',
            'gender' => 'Male',
            'birthday' => Carbon::create('1999', '09', '08'),
            'birthplace' => 'Sta. Cruz',
            'civil_status' => 'Single',

            'house_number' => '123',
            'purok' => '1',
            'street' => 'Silangan',

            
            'occupation' => 'Vendor',
            'Student' => 'Yes',
            'type_of_house' => 'Owned',

            'pwd' => 'Yes',
            'membership_prog' => 'TUPAD',

            'image' => 'avatar-mark.jpg',
            'path' => '/storage/residence/avatar-mark.jpg',

        ]);
    }
}
