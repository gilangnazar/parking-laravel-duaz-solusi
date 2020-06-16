<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    protected $fillable = [
        "name",
        "vehicle_type",
        "registration_plate",
        "day_of_birth",
        "gender",
        "phone_number"
    ];
}
