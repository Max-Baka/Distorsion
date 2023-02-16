<?php
require 'managers/UserManager.php';
require 'managers/CategoryManager.php';
require 'managers/PostManager.php';
require 'managers/SalonManager.php';
require'logic/router.php';
session_start();

$newRouter = new Router();

if (isset ($_GET["route"])){
    
    $newRouter->checkRoute($_GET["route"]);
}
else
{
    $newRouter->checkRoute("");
}


?>