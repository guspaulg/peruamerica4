<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosVentas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DatosVentas', function($table)
	    {
	        $table->increments('id');
	        $table->string('idcliente');
	        $table->string('email')->unique();
	        $table->string('contrasena');
	        $table->string('nombres');
	        $table->string('appaterno');
	        $table->string('apmaterno');
	        $table->string('dni');
	        $table->string('ruc');
	        $table->string('razonsocial');
	        $table->string('direccionfiscal');
	        $table->string('telefono1');
	        $table->string('telefono2');
	        $table->string('tipodireccion');
	        $table->string('direccion');
	        $table->string('referencia');
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
		//
	}

}
