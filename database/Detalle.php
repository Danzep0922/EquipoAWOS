<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    //
   public $fillable = [
      'iddetalle' ,
      'idcliente',
      'idventa' ];
}
