<?php
//DANAE TORRES CARBAJAL

namespace App;
use App\Servicios;
use App\Inmuebles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inmuebleservicios extends Model
{
    //
    public $fillable = [
        'idinmueble',
        'idservicio'
    ];
    
    public static function validationRules(){
        return[
            'idinmueble' =>'nullable | min:5 |max:50',
            'idservicio'  =>'nullable| min:5 |max:50',
        ];
    }

    Use SoftDeletes;
    protected $table = 'inmuebleservicios';

    public function Inmuebleserevcios()
    {
        return $this->hasMany(Servicios::class);

        return $this->hasMany(Inmuebles::class);
    }

}
