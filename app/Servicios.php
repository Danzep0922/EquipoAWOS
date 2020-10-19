<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    //
    public $fillable = [
        'agua_potable',
        'telefonia',
        'internet',
        'energia_electrica',
        'gas'
    ];
}
