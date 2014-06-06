<?php
 
    class UserController extends BaseController {
        protected $layout = "shared.main";
        
        public function getRegister() {
            $this->layout->content = View::make('user.register');
        }
        
        
    }
?>