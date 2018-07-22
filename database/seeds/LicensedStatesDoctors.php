<?php

use Illuminate\Database\Seeder;
use App\States;
use App\Doctors;
use App\DoctorLicensedStates;
use Carbon\Carbon;

class LicensedStatesDoctors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clean up target table
        DoctorLicensedStates::truncate();

        // reference data. States is prefixed with US- because this is how
        // ammap will read the state to map it with US map.
        $doctor_states_ref = [
            'Dr. Mike' => [
                'US-AK', 'US-DE', 'US-ID', 'US-ME', 'US-MA', 'US-MS', 'US-NV', 'US-NM', 'US-ND', 'US-PA', 'US-VT', 'US-VA', 'US-WA'
            ],
            'Dr. Odom' => [
                'US-AZ', 'US-AR', 'US-CA', 'US-CO', 'US-CT', 'US-DC', 'US-FL', 'US-GA', 'US-HI', 'US-IL', 'US-IN', 'US-IA', 'US-KS',
                'US-KY', 'US-MD', 'US-MI', 'US-MN', 'US-MO', 'US-MT', 'US-NE', 'US-NH', 'US-NJ', 'US-NY', 'US-NC', 'US-OH', 'US-OK',
                'US-OR', 'US-OK', 'US-RI', 'US-SC', 'US-TN', 'US-UT', 'US-WI', 'US-WV', 'US-WY'
            ]
        ];

        $color_ref = ['Dr. Mike' => '#2B78AD', 'Dr. Odom' => '#3697D9'];

        try {
            // get all doctors and states
            $states  = States::all();
            $doctors = Doctors::all();

            // get local timezone
            $local_time = Carbon::now(new DateTimezone(config('app.timezone')));

            foreach ($doctor_states_ref as $doctor_name => $ref) {
                foreach ($states as $state) {
                    // check if doctor is licensed to the current state. if yes,
                    // get referenced doctor and state and save to target table
                    if (in_array($state->state_name, $ref)) {
                        $doctor = Doctors::where('doctor_name', $doctor_name)->first();
                        $data = [
                            'doctor_id' => $doctor->id,
                            'state_id'  => $state->id,
                            'color'     => $color_ref[$doctor_name]
                        ];

                        DoctorLicensedStates::create($data);
                        $this->command->info("[" . $local_time->format('Y-m-d H:i:s') . "] {$doctor_name} is licensed in state of " . substr($state->state_name, -2));
                    }
                }
            }
        } catch (Exception $e) {
            $this->command->error("[" . $local_time->format('Y-m-d H:i:s') . "] Error: " . $e->getMessage() . ". Line: " . $e->getLine());
        }
    }
}
