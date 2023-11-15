<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable=[
    'titulo',
    'editorial_id',
    'edicion',
    'pais',
    'precio'];
    public function editorial()
    {
        return $this->belongsTo(Editorial::class,'editorial_id' , 'id');
    }
}
