//Dulce Maria Sevilla Ortiz*/<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('idventa');
            $table->increment('idcliente', 11);
            $table->incremet('idinmueble', 11);
            $table->string('tipo_inmueble', 50);
            $table->string('total_de_venta', 50);
            $table->string('forma_de_pago', 50);
            $table->integer('contraseña', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
