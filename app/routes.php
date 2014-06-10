<?php

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

Route::get('/filldatabase', array(
	'as' => 'filldatabase',
	'uses' => 'DatabaseController@fill'
));

Route::controller('user', 'UserController');
