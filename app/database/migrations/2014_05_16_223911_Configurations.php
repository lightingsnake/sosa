<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Configurations extends Migration {

	//Tabla de configuraciones
	public function up()
	{
		Schema::create('configurations', function($table){
			$table->increments('id');
			$table->string('name');
			$table->text('value');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('configurations');
	}

}
