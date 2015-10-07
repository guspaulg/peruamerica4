<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tarjeta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarjetas', function($table)
	    {
	        $table->increments('id');
	        $table->string('idcliente');
	        $table->integer('cantidad');
	        $table->string('papel');
	        $table->string('caras');
	        $table->string('impresion');
	        $table->string('plastificado');
	        $table->string('bordes');
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
