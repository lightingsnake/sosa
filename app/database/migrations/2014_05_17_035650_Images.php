<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Images extends Migration {

	//Creamos la tabla para las imagenes de las paginas
	public function up()
	{
		Schema::create('images', function($table){
			$table->increments('id');
			$table->integer('pageId');
			$table->string('extension');
			$table->timestamps();
		});
	}

	
	public function down()
	{
		Schema::drop('images');
	}

}
