<?php

namespace App\Models;

use Database\Factories\CityFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitiesModel extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $primarykey = 'id';

    protected static function newFactory()
    {
        return CityFactory::new();
    }
}
