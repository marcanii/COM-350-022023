<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposDocumento extends Model
{
    use HasFactory;
    protected $fillable=['descripcion'];
    public function clientes() {
        return $this->hasMany(Cliente::class,'tipo_documento_id' , 'id');
    }
}
