//Saira Martinez Diaz*/<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueblesservicios', function (Blueprint $table) {
            $table->bigIncrements('idinmueblesservicios');
            $table->bigIncrements('idinmueble', 11);
            $table->bigIncrements('idservicio', 11);
            $table->integer('idinmueble')->unsigned();
            $table->integer('idservicio')->unsigned();
            $table->foreign('idinmueble')->refrences('inmuebles')->on('idinmueble');
            $table->foreign('idservicio')->refrences('servicios')->on('idservicio');
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
        Schema::dropIfExists('inmueblesservicios');
    }
}
