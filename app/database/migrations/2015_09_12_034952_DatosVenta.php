<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosVenta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DatosVenta', function($table)
	    {
	        $table->increments('id');
	        $table->string('idcliente');
	        $table->string('producto');
	        $table->string('cantidad');
	        $table->string('detalles');
	        $table->integer('precio');
	        $table->string('img');
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
