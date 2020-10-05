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
            $table->bigIncrements('iddetalle');
            $table->increments('idcliente', 50);
            $table->increments('idventa', 50);
            $table->integer('idcliente')->unsigned();
            $table->integer('id')->unsigned();
            $table->foreign('idcliente')->refrences('id')->on('clientes');
            $table->foreign('id')->refrences('id')->on('ventas');
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
