<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ResidenceSeeder::class);
        $this->call(OfficialsSeeder::class);
        $this->call(UserSeeder::class);
     
    }
}
