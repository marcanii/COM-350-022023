<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'placa',
        'tipo_documento_id',
        'numero_documento',
        'nombre',
        'apellido',
        'telefono',
        'fecha_nacimiento'
    ];
}
