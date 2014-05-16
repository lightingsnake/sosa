<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {
	//Creación y eliminacion de la table de usuarios
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('email');
			$table->string('password');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('users');
	}

}
