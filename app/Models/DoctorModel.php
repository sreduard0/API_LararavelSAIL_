<?php

namespace App\Models;

use Database\Factories\DoctorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorModel extends Model
{
    public function patients()
    {
        return $this->belongsToMany(PatientModel::class, 'doctor_patient', 'doctor_id', 'patient_id')->select('name', 'cpf', 'phone');
    }
    use HasFactory;

    protected $table = 'doctor';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'specialty', 'cities_id'];
    protected static function newFactory()
    {
        return DoctorFactory::new();
    }
}
