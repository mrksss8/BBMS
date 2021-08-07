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
            'birthday' => Carbon::create('2000', '01', '01'),

            'house_number' => '132',
            'purok' => '1',
            'street' => 'Silangan',

            'civil_status' => 'Single',
            'occupation' => 'Vendor',
            'type_of_house' => 'Owned',

        ]);
    }
}
