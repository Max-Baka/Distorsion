<?php
function checkRoute(string $route) : void 
{
    if ($route === "connexion") 
{
    require  'pages/login.php';
}
else if ($route === "creer-un-compte")
{
    require  'pages/register.php';
}
else if ($route === "creer-un-salon")
{
    require  'pages/registerSalon.php';
}
else if ($route === "creer-une-categorie")
{
    require  'pages/registerCategory.php';
}

else
{
    require  'pages/homepage.php';
}
}
?>