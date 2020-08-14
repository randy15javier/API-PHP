<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Medical_Appointment;

class Appointment_Detail extends Model
{
    protected $fillable = [

        'id_doctor',
        'id_appointment',   
    ];

    public function doctor()
    {
    	return $this->belongsTo(Doctor::class);
    }

    public function medical_appointment()
    {
    	return $this->belongsTo(Medical_Appointment::class);
    }
}