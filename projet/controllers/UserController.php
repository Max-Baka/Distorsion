<?php
require 'AbstractController.php';
class UserController extends AbstractController {
    private UserManager $manager;
    
    public function __construct()
    {
        $this->manager = new UserManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
    }
  
        public function accueil()
        {
            $this->render("homepage", []);
        }
        public function create(array $post)
        {
            $user = new User($post['username'], $post['email'], $post['password']);
            $this->manager-> insertUser($user);
            $this->render("register", ["user"=>$this->manager->insertUser($user)]);
        }
        public function login(array $post)
        {
            $this->render("login");
        }
}

?>