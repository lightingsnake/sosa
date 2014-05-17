<?php

class PageTableSeeder extends Seeder {

	public function run()
	{
		Page::create(array('url'=>'sonidomovil', 'title'=>'Sonido Movil', 'content'=>''));
		Page::create(array('url'=>'efectosvisuales', 'title'=>'Efectos Visuales', 'content'=>''));
		Page::create(array('url'=>'iluminacion', 'title'=>'iluminación', 'content'=>''));
		Page::create(array('url'=>'video', 'title'=>'Video', 'content'=>''));
		Page::create(array('url'=>'minitecas', 'title'=>'Minitecas', 'content'=>''));
		Page::create(array('url'=>'sonido', 'title'=>'Sonido', 'content'=>''));
		Page::create(array('url'=>'infraestructura', 'title'=>'Infraestructura', 'content'=>''));
	}
}
