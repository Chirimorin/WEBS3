<?php

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

Route::controller('user', 'UserController');
