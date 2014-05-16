<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
			'email' => 'andres.territoriovirtual@gmail.com',
			'password' => Hash::make('123')
		));
	}

}
