<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descarte extends Model
{
    protected $fillable = [
        'descarte_id',
        'id_proyecto',
        'causa'
    ];
}
