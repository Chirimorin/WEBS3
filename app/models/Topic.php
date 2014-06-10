<?php

class Topic extends Eloquent {

	protected $table = 'topic';
 
	public function form()
	{
		return $this->belongsTo('Forum');
	}

	public function posts()
	{
		return $this->hasMany('Post');
	}

}

?>