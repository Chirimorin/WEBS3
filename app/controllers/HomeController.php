<?php

class HomeController extends BaseController {

	public function home()
	{
		$categories = Forum::whereNull('parent')->get();
		return View::make('home.hello')->with('categories', $categories);;
	}

}
