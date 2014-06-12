<?php
 
    class DatabaseController extends BaseController {
                
        public function fill() {

        	//database legen
			$postVotes = PostVote::all();
			foreach ($postVotes as $postVote) {
				$postVote->delete();
			}

			$posts = Post::all();
			foreach ($posts as $post) {
				$post->delete();
			}

			$users = User::all();
			foreach ($users as $user) {
				$user->delete();
			}

			$logins = Post::all();
			foreach ($logins as $login) {
				$login->delete();
			}

			$topics = Topic::all();
			foreach ($topics as $topic) {
				$topic->delete();
			}

			$forums = Forum::all();
			foreach ($forums as $forum) {
				$forum->delete();
			}


        	//database vullen
        	$user = new User;
        	$user->username = "Mickey";
        	$user->password = "";
        	$user->email = "michael.vd.ven@hotmail.com";
        	$user->location = "goirle";
        	$user->signature = "climbing boy";
        	$user->save();

        	$user1 = new User;
        	$user1->username = "Henk";
        	$user1->password = "";
        	$user1->email = "henk@gmail.com";
        	$user1->location = "Tilburg";
        	$user1->signature = "Henk Tank";
        	$user1->save();

        	$forum = new Forum;
			$forum->title = "Campings";
			$forum->description = "Dingen weten over een camping; winkels, camping plaatsen en restaurants.";
			$forum->parent = null;
			$forum->save();

			$forum1 = new Forum;
			$forum1->title = "Eten";
			$forum1->description = "Restaurants en winkels.";
			$forum1->parent = $forum->id;
			$forum1->save();

			$forum2 = new Forum;
			$forum2->title = "Veiligheid";
			$forum2->description = "Veiligheid is voor pussy's, en voor het extreme gedoe.";
			$forum2->parent = null;
			$forum2->save();

			$topic = new Topic;
			$topic->public = true;
			$topic->views = 0;
			$forum2->topics()->save($topic);

			$post = new Post;
			$post->title = "Restaurants in Fontain Bleau";
			$post->content = "Ik ben op zoek naar een lekker restaurant is Bleau, kan iemand mij er een wijzen?";
			$post->author = $user->id;
			$topic->posts()->save($post);

			$postVote = new PostVote;
			$postVote->user_id = $user->id;
			$postVote->isPositive = 1;
			$post->postVotes()->save($postVote);

			$postVote = new PostVote;
			$postVote->user_id = $user1->id;
			$postVote->isPositive = 1;
			$post->postVotes()->save($postVote);

			$post = new Post;
			$post->title = "Next vilage";
			$post->content = "Er is een leuk restaurantje in het dorp ernaast, op de hoek bij de bank.";
			$post->author = $user1->id;
			$topic->posts()->save($post);

			$post = new Post;
			$post->title = "Zeker?";
			$post->content = "Hee man weet je zeker dat het niet 2 dorpen verder was? Die eerste is niet echt schoon...";
			$post->author = $user->id;
			$topic->posts()->save($post);

			$postVote = new PostVote;
			$postVote->user_id = $user1->id;
			$postVote->isPositive = 0;
			$post->postVotes()->save($postVote);

			$post = new Post;
			$post->title = "excusses";
			$post->content = "Sorry man, je hebt helemaal gelijk, foutje van me, sorry!";
			$post->author = $user1->id;
			$topic->posts()->save($post);

			$postVote = new PostVote;
			$postVote->user_id = $user->id;
			$postVote->isPositive = 1;
			$post->postVotes()->save($postVote);
			

            return View::make('database.fill');
        }
        
        
    }

?>