<?php
require 'AbstractController.php';
class UserController extends AbstractController {
    private UserManager $manager;
    
    public function __construct()
    {
        $this->manager = new UserManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
    }
        public function login(array $Post) : void
        {
            if (!empty($Post))
            {
                if (($Post['email']!=='') && ($Post['password']!=='')) 
                 {
                     if($this->loginUser($Post["email"],$Post["password"])===true)
                     {
                         $_SESSION["Connected"]=true;
                         $_GET["route"]="homepage";
                         $this->render("homepage", []);
                     }
                     else 
                     {
                         $this->render("login", []);
                     }
                 }
            }
            else
            {
                $this->render("login", []);
            }
        }
        
        public function register(array $post)
        {
            
            if (!empty($post))
            {
                 if (($post['username']!=='' )  &&  ($post['email']!=='') && ($post['password']!=='')) 
                 {
                     $userToAdd = new User($post["username"],$post["email"],$post["password"]);
                     $this->manager->insertUser($userToAdd);
                 }
            }
            $this->render("register", []);
        }
        private function loginUser(string $Email , string $Password):bool 
        {
             $user = $this->manager->getUserByEmail($Email);
    
             if($user !== null && $Password === $user->getPassword())
             {
                return true;   
             }
             else
             {
                return false;
             }
        }
        public function displayCategory()
        {
            $CM = new CategoryManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
            $SM = new SalonManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
            
            $Salons=$SM->findAllSalon();
            
            $Categories=$CM->findAllCategory();
            $this->renders("homepage", $Categories, $Salons);
            
        }
        public function displaySalon()
        {
            $SM = new SalonManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
            
            $Salons=$SM->findAllSalon();
            $this->render("homepage", $Salons);
            
        }
}
?>