<?php
//DANAE TORRES CARBAJAL

namespace App;
use App\Inmuebleservicios;
use App\Municipios;
use App\Estados;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inmuebles extends Model
{
    //
    public $fillable = [
        'idestado',
        'idmunicipio',
        'casa',
        'departamento',
        'oficina',
        'terreno'
    ];

    public static function validationRules(){
        return[
            'idestado' =>'nullable | min:5 |max:50',
            'idmunicipio'  =>'nullable| min:5 |max:50',
            'casa'  =>'requeried| min:5 |max:50',
            'departamento'  =>'requeried| min:5 |max:50',
            'oficina'  =>'requeried| min:5 |max:50',
            'terreno' =>'requeried| min:1 |max:32',
        ];
    }

     Use SoftDeletes;
     protected $table = 'inmuebles';

    public function Inmuebles()
    {
        return $this->hasMany(Inmuebleservicios::class);
        return $this->hasMany(Municipios::class);
        return $this->hasMany(Estados::class);

        return $this->hasOne(Inmuebles::class);
    }
}
