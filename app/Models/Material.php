<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'id_material',
        'nombre',
        'tipo',
        'descripcion',
        'precio'
    ];
}
