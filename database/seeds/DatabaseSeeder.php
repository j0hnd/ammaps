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
        $this->call(DoctorsSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(LicensedStatesDoctors::class);
    }
}
