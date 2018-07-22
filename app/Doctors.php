<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    public function doctor_licensed_states()
    {
        return $this->belongsTo(DoctorLicensedStates::class, 'doctor_id', 'id');
    }
}
