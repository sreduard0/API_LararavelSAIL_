<?php

namespace App\Models;

use Database\Factories\DoctorPatientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorPatientModel extends Model
{
    use HasFactory;
    protected $table = 'doctor_patient';
    protected $primarykey = 'id';
    protected static function newFactory()
    {
        return DoctorPatientFactory::new();
    }
}
