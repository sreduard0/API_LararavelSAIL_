<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorModel extends Model
{
    use HasFactory;
    protected $table = 'doctor';
    protected $primarykey = 'id';
    protected static function newFactory()
    {
        return DoctorModel::new();
    }
}
