<?php

class ConfigurationTableSeeder extends Seeder {

	public function run()
	{
		$configurations = array('Meta-Descripción'=>'', 'Meta-Etiquetas (Tags)'=>'', 'Mapa'=>'');
		foreach ($configurations as $name => $value):
			Configuration::create(array('name'=>$name, 'value'=>$value));
		endforeach;
	}

}
