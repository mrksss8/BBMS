<?php

use Illuminate\Database\Seeder;

class OfficialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('officials')->insert([
             'brgy_official_name' => 'Crisanto A. Tandang',
             'brgy_official_position' => 'Barangay Chairman',
             'batch_id' => '2018'
         ]);
  
         DB::table('officials')->insert([
             'brgy_official_name' => 'Dionisio A. Salazar',
             'brgy_official_position' => 'Barangay Councilor 1',
             'brgy_official_role' => 'Gender and Development',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Bernardo M. Vasquez',
             'brgy_official_position' => 'Barangay Councilor 2',
             'brgy_official_role' => 'Appropriation',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Virgilio A. Tandang',
             'brgy_official_position' => 'Barangay Councilor 3',
             'brgy_official_role' => 'Peace and Order',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Victorio N. Carillaga',
             'brgy_official_position' => 'Barangay Councilor 4',
             'brgy_official_role' => 'Health and Sanitation',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Wenceslao C. Tandang',
             'brgy_official_position' => 'Barangay Councilor 5',
             'brgy_official_role' => 'Education',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Efren M. Eugenio Jr.',
             'brgy_official_position' => 'Barangay Councilor 6',
             'brgy_official_role' => 'Tourism and Environment',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Luisito P. Lapitan',
             'brgy_official_position' => 'Barangay Councilor 7',
             'brgy_official_role' => 'Agriculture, Livelihood and Cooperative',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Leslie Ann B. Mateo',
             'brgy_official_position' => 'Barangay SK Chairperson',
             'brgy_official_role' => 'Sports and Development',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Arthur Paul John L. Gaza',
             'brgy_official_position' => 'Barangay Secretary',  
             'brgy_official_role' => 'Barangay Secretary',
             'batch_id' => '2018' 
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Teresa P. Lopez',
             'brgy_official_position' => 'Barangay Treasurer',
             'brgy_official_role' => 'Barangay Treasurer',
             'batch_id' => '2018'
         ]);

         DB::table('officials')->insert([
             'brgy_official_name' => 'Lea C. Tandang',
             'brgy_official_position' => 'Barangay Clerk',
             'brgy_official_role' => 'Barangay Clerk',
             'batch_id' => '2018'
           
         ]);

         DB::table('officials')->insert([
            'brgy_official_name' => 'Mary Grace B. Egildo',
            'brgy_official_position' => 'Barangay Clerk',
            'brgy_official_role' => 'Barangay Clerk',
            'batch_id' => '2018'
          
        ]);
    }
}
