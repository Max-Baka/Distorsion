<?php
require 'AbstractController.php';
class UserController extends AbstractController {
    private UserManager $manager;
    
    public function __construct()
    {
        $this->manager = new UserManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
    }
  
        
        public function create(array $post)
        {
            $user = new User($post['email'], $post['username'], $post['password']);
            $this->manager-> insertUser($user);
            render("create", ["user"=>$this->manager->insertUser($user)]);
        }
        
}

?>