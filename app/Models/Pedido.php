<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'pedido_id',
        'user_id',
        'cantidad',
        'tipo_solicitud',
        ''
    ];
}
