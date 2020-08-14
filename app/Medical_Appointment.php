<?php

namespace App;

use App\Doctor;
use App\Appointment_Detail;
use App\Scopes\AppointmentScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medical_Appointment extends Model
{
    use SoftDeletes;

    const CITA_ATENDIDA = 'Atendida';
    const CITA_NO_ATENDIDA = 'No atendida';

    protected $dates = ['deleted_at'];

    protected $table = 'medical_appointments';

    protected $fillable = [
    
        'date',
        'time',
        'status',
        'observation',
        'price',
        'patient',
        
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new AppointmentScope);
    }
    
    public function estaAtendida()
    {
        return $this->status == Appointment :: CITA_ATENDIDA; 
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function appointment_detail()
    {
        return $this->belongsTo(Appointment_Detail::class);
    }
}

