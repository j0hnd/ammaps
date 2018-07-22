<?php

use Illuminate\Database\Seeder;
use App\States;
use Carbon\Carbon;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            "US-AL",
            "US-AK",
            "US-AZ",
            "US-AR",
            "US-CA",
            "US-CO",
            "US-CT",
            "US-DE",
            "US-FL",
            "US-GA",
            "US-HI",
            "US-ID",
            "US-IL",
            "US-IN",
            "US-IA",
            "US-KS",
            "US-KY",
            "US-LA",
            "US-MD",
            "US-MA",
            "US-MI",
            "US-MN",
            "US-MS",
            "US-MO",
            "US-MT",
            "US-NE",
            "US-NV",
            "US-NH",
            "US-NJ",
            "US-NM",
            "US-NY",
            "US-NC",
            "US-ND",
            "US-OH",
            "US-OK",
            "US-OR",
            "US-PA",
            "US-RI",
            "US-SC",
            "US-SD",
            "US-TN",
            "US-TX",
            "US-UT",
            "US-VT",
            "US-VA",
            "US-WA",
            "US-WV",
            "US-WI",
            "US-WY"
        ];

        States::truncate();
        $count = 0;

        // get local timezone
        $local_time = Carbon::now(new DateTimezone(config('app.timezone')));

        foreach ($states as $state) {
            States::create(['state_name' => $state]);
            $count++;
        }

        $this->command->info("[" . $local_time->format('Y-m-d H:i:s') . "] " . $count . " states added.");
    }
}
