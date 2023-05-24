<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProyectoImages extends Model
{
    use HasFactory;
    protected $table = "DetalleProyectoImages";
    protected $primaryKey = 'iddetalleproyectoimage';
}
