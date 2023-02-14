<?php
require 'managers/UserManager.php';
require 'managers/CategoryManager.php';
require 'managers/PostManager.php';
require 'managers/SalonManager.php';
require'logic/router.php';
session_start();
// $um = new CategoryManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
// $um1 = new UserManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
// $um2 = new PostManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
// $um3 = new SalonManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");


$newRouter = new Router();

if (isset ($_GET["route"])){
    
    $newRouter->checkRoute($_GET["route"]);
}
else
{
    $newRouter->checkRoute("");
}

// $test = new Category ("test2");
// $um->insertCategory($test);
// $id=$um->getCategoryById("2");
// var_dump($id);
?>