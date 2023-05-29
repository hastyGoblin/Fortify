<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public function nivel() 
    {
        return $this->belongsTo(Nivel::class, 'fk_nivel', 'ID'); // Le indicamos que se tiene que relacionar con la tabla de niveles mediante el modelo
    }
}
