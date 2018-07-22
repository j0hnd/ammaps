<?php

use Illuminate\Database\Seeder;
use App\Doctors;
use Carbon\Carbon;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctors::truncate();
        $doctors = ['Dr. Mike', 'Dr. Odom'];
        $count = 0;

        // get local timezone
        $local_time = Carbon::now(new DateTimezone(config('app.timezone')));

        foreach ($doctors as $doctor) {
            Doctors::create(['doctor_name' => $doctor]);
            $count++;
        }

        $this->command->info("[" . $local_time->format('Y-m-d H:i:s') . "] " . $count . " doctors has been added.");
    }
}
