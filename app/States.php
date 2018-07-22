<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    public function state_licensed()
    {
        return $this->belongsTo(DoctorLicensedStates::class, 'state_id', 'id');
    }
}
