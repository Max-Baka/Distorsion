<?php
require 'managers/UserManager.php';
require 'managers/CategoryManager.php';
require 'managers/PostManager.php';
require 'managers/SalonManager.php';
require'logic/router.php';

$um = new SalonManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");

$test = new Salon ("test1","test1");
$um->insertSalon($test);
$id=$um->getSalonById("1");
var_dump($id);
?>