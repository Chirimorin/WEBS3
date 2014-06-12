<?php
 
    class DatabaseController extends BaseController {
                
        public function fill() {

        	$forum = new Forum;
			$forum->title = "Campings";
			$forum->description = "Dingen weten over een camping; winkels, camping plaatsen en restaurants.";
			$forum->parent = "1";
			$forum->save();

			$topic = new Topic;
			$topic->public = true;
			$topic->views = 0;
			$forum->topics()->save($topic);

            return View::make('database.fill');
        }
        
        
    }

?>