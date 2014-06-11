<?php
 
class Forum extends Eloquent {

	protected $table = 'forum';
 
	public function topics()
	{
		return $this->hasMany('Topic');
	}

	public function parent()
	{
		return $this->belongsTo('Forum');
	}
 
}

?>