<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = "Vehiculo";
    protected $primaryKey = 'idvehiculo';
    protected $keyType = 'string';
}
