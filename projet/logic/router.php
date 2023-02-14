<?php
require 'controllers/UserController.php';
class Router {
    private UserController $uc;
    public function __construct()
    {
        $this->uc = new UserController();
        
    }
    
    function checkRoute(string $route) : void
    {
        if ($route === "accueil") 
        {
           $this->uc->accueil();
        }
        else if ($route === "register")
        {
            $this->uc->create();
        }
        else if($route === "login")
        {
            $this->uc->login();
        }
        else
        {
            $this->uc->accueil();
        }
    }
}
?>