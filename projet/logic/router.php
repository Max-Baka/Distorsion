<?php
require 'controllers/UserController.php';
require 'controllers/CategoryController.php';
require 'controllers/SalonController.php';
require 'controllers/PostController.php';
class Router {
    private UserController $uc;
    private CategoryController $uC;
    private SalonController $uS;
    private PostController $uP;
    public function __construct()
    {
        $this->uc = new UserController();
        $this->uC = new CategoryController();
        $this->uS = new SalonController();
        $this->uP = new PostController();
    }
    
    function checkRoute(string $route) : void
    {
        if ($route === "homepage") 
        {
           
           if (isset($_SESSION["Connected"]) && $_SESSION["Connected"]!==true)
           {
               $this->uc->login();
           }
           else 
           {
               $this->uc->displayCategory();
           }
        }
        else if ($route === "register-category") 
        {
            $this->uC->createCategory($_POST);
        }
        else if ($route === "register-salon") 
        {
            $this->uS->createSalon($_POST);
        }
        else if ($route === "register-post") 
        {
            $this->uP->createPost($_POST);
        }
        else if ($route === "register")
        {
            $this->uc->register($_POST);
            
        }
        else if ($route === "login")
        {
            $this->uc->login($_POST);
        }
        else
        {
            if (isset($_SESSION["Connected"]) && $_SESSION["Connected"]!==true)
           {
               $this->uc->login();
               echo"if";
           }
           else 
           {
               $this->uc->accueil();
               echo"else";
           }
        }
    }
}
?>