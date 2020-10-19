<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iddetalle',11);
            $table->string('idcliente',11);
            $table->string('idventa',11);
            $table->foreign('idcliente')->references('idcliente')->on('clientes');
            $table->foreign('idventa')->references('idventa')->on('ventas');
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
        Schema::dropIfExists('detalle');
    }
}
