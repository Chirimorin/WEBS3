<?php
 
class Post extends Eloquent {

	protected $table = 'post';
 
	public function topic()
	{
		return $this->belongsTo('Topic');
	}

	public function postVotes()
	{
		return $this->hasMany('PostVote');
	}
	
	public function user()
	{
		return $this->belongsTo('user');
	}
 
}

?>