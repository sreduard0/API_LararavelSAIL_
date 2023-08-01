<?php

namespace App\Models;

use Database\Factories\PatientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientModel extends Model
{
    use HasFactory;
    protected $hidden = ['pivot'];
    protected $table = 'patient';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'cpf', 'phone'];

    protected static function newFactory()
    {
        return PatientFactory::new();
    }
}
