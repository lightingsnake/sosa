<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Page extends Eloquent  {
	public function images()
	{
		return $this->hasMany('Image', 'pageId');
	}
}
