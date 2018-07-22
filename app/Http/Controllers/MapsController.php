<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorLicensedStates;
use App\Doctors;
use App\States;

class MapsController extends Controller
{
    public function index(Request $request)
    {
        $doctor_state_ref = DoctorLicensedStates::all();
        $data = [];

        if (count($doctor_state_ref)) {
            foreach ($doctor_state_ref as $ref) {
                $data[] = [
                    'id'          => $ref->states->state_name,
                    'description' => $ref->doctors->doctor_name,
                    'color'       => $ref->color
                ];
            }
        }

        return view('maps.index', compact('data'));
    }
}
