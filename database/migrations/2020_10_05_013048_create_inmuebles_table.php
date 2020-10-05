<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->bigIncrements('idinmueble');
            $table->bigIncrements('idestado', 50);
            $table->bigIncrements('idmunicipio', 50);
            $table->string('tipo_de_inmueble', 50);
            $table->string('domicilio', 50);
            $table->integer('idmunicipio')->unsigned();
            $table->integer('idestado')->unsigned();
            $table->foreign('idestado')->refrences('estados')->on('idestado');
            $table->foreign('idmunicipio')->refrences('municipios')->on('idmunicipio');
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
        Schema::dropIfExists('inmuebles');
    }
}
