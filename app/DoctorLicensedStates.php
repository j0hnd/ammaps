<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorLicensedStates extends Model
{
    public $with = ['doctors', 'states'];


    public function doctors()
    {
        return $this->hasOne(Doctors::class, 'id', 'doctor_id');
    }

    public function states()
    {
        return $this->hasOne(States::class, 'id', 'state_id');
    }
}
