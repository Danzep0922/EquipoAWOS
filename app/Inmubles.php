<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmubles extends Model
{
    //
    public $fillable = [
        'idestado','idmunicipio','casa','departamento',
        'oficina',
        'terreno'
    ];
}
