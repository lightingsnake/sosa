<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Image extends Eloquent  {
	
	public function page()
	{
		return $this->belongsTo('Page', 'pageId');
	}
}
