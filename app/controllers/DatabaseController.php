<?php
 
    class DatabaseController extends BaseController {
                
        public function fill() {

        	$forum = new Forum;
			$forum->title = "Campings";
			$forum->description = "Dingen weten over een camping; winkels, camping plaatsen en restaurants.";
			$forum->parent = "";
			$forum->save();

			$topic = new Topic;
			$topic->public = true;
			$post->topics()->save($topic);

            return View::make('database.fill');
        }
        
        
    }

?>