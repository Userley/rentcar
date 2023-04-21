<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo_Lugar extends Model
{
    use HasFactory;
    protected $table = "Vehiculo_Lugar";
    protected $primaryKey = 'idvehiculolugar';
}
