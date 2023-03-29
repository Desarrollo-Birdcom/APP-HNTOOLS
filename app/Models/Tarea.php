<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'tarea_id',
        'user_id',
        'proyecto_id',
        'descripcion',
        'creacion',
        'duracion'
    ];
}
