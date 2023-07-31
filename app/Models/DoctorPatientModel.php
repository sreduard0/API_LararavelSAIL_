<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorPatientModel extends Model
{
    use HasFactory;
    protected $table = 'doctor_patient';
    protected $primarykey = 'id';
}
