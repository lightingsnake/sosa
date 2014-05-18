<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banners extends Migration {

	//tabla de los Banners del home
	public function up()
	{
		Schema::create('banners', function($table){
			$table->increments('id');
			$table->string('extension');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('banners');
	}

}
