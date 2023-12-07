<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correspondencia extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'fecha',
        'remitente',
        'asunto',
        'cite',
        'destinatario_id'
    ];
    public function destinatario()
    {
        return $this->belongsTo(Destinatario::class,'destinatario_id' , 'id');
    }
}
