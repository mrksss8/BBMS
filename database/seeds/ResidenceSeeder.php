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
        DB::table('residence')->insert([
            'last_name' => 'Bautista',
            'first_name' => 'Mark Anthony',
            'middle_name' => 'Noza',
            'gender' => 'Male',
            'birthday' => Carbon::create('1999', '09', '08'),
            'civil_status' => 'Single',

            'house_number' => '123',
            'purok' => '1',
            'street' => 'Silangan',

            
            'occupation' => 'Vendor',
            'type_of_house' => 'Owned',

            'pwd' => 'Yes',
            'membership_prog' => 'TUPAD',

            'image' => 'avatar-mark.jpg',
            'path' => '/storage/residence/avatar-mark.jpg',

        ]);
    }
}
