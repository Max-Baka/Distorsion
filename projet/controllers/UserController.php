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
        public function login()
        {
            $this->render("login", []);
        }
        public function register()
        {
            $this->render("register", []);
        }
        
         public function create(array $post)
         {
             $user = new User($post['username'], $post['email'], $post['password']);
             $this->manager-> insertUser($user);
             $this->render("register", ["user"=>$this->manager->insertUser($user)]);
         }
        
        public function loginUser (string $Email , string $Password):bool 
        {
             $user = $this->manager->getUserByEmail($Email);
    
             if($user !== null && $Password === $User->getPassword())
             {
                return true;   
             }
             else
             {
                return false;
             }
        }

}

?>