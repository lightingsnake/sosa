<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pages extends Migration {

	//Tabla que guarda el contenido principal de las páginas
	public function up()
	{
		Schema::create('pages', function($table){
			$table->increments('id');
			$table->string('url');
			$table->string('title');
			$table->text('content');
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
		Schema::drop('pages');
	}

}
