<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaTrabajo extends Model
{
    protected $fillable = [
    'dia',
    'activo',

    'mañana',
    'mañanafin',

    'tarde',
    'tardefin',

    'user_id',
    ];
    
}
