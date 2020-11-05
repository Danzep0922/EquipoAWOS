<?php
//DANAE TORRES CARBAJAL

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ventas extends Model
{
    //
    public $fillable = [
        'idcliente',
        'idinmueble',
        'tipo_inmueble',
        'total_de_venta',
        'forma_de_pago'
    ];

    public static function validationRules(){
        return[
            'idcliente' =>'requeried | min:5 |max:50',
            'idinmueble'  =>'requeried| min:5 |max:50',
            'tipo_inmueble'  =>'requeried| min:5 |max:50',
            'total_de_venta'  =>'requeried| min:5 |max:50',
            'forma_de_pago'  =>'requeried| min:5 |max:50',
        ];
    }

    Use SoftDeletes;
    protected $table = 'ventas';

     public function Ventas()
    {
        return $this->hasMany(User::class);
    }

}
