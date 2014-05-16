<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRememberTokemToUsers extends Migration {

	//Agregamos el campo de remember_token a users
	public function up()
	{
		Schema::table('users', function($table){
			$table->string('remember_token', 100)->nulleable();
		});
	}


	public function down()
	{
		Schema::table('users', function($table){
			$table->dropColumn('remember_token');
		});
	}

}
