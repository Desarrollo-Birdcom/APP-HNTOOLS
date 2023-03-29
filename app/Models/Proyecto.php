<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'id_proyecto',
        'nombre',
        'estado',
        'descripcion',
        'cliente',
        'contacto',
        'fecha_entrega',
        'estimacion_horas',
        'documentacion',
        'transporte'
    ];
}
