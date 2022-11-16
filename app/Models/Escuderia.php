<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuderia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'fecha_creacion',
        'num_pilotos',
        'sobre_presupuesto'
    ];
}
