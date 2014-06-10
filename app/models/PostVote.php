<?php
 
class PostVote extends Eloquent {

	protected $table = 'postVote';
 
	public function post()
	{
		return $this->belongsTo('Post');
	}

	public function user()
	{
		return $this->belongsTo('user');
	}
 
}

?>