<?php
 
class Login extends Eloquent {

	protected $table = 'login';
	
	public function user()
	{
		return $this->belongsTo('user');
	}
 
}

?>