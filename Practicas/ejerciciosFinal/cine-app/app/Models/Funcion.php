<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelicula_id',
        'sala_id',
        'fecha_hora_inicio',
        'precio_entrada',
    ];
}
