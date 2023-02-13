<?php
$template = "login";
require "templates/layout.phtml";
$NewUser = 
[
    "username" => "",
    "password" => "",
    "email" => ""
];
if (isset($_POST['username'])  &&  isset($_POST['email']) && isset($_POST['password'])) 
{
    $NewUser['username'] = $_POST['lastName'];
    $NewUser['email'] = $_POST['email'];
    $NewUser['password'] = $_POST['password'];
    $newuser = new User ($NewUser["username"],$NewUser["email"],$NewUser["password"]);
    saveUser($newuser);
}

$logUser = 
[
    "email" => "",
    "password" => ""
];

if (isset($_POST['loginPassword']) && isset($_POST['loginEmail'])) 
{
    $logUser['email'] = $_POST['loginEmail'];
    $logUser['password'] = $_POST['loginPassword'];
    
    
    $LogUser=loadUser($logUser['email']);
    
    
   
    if (password_verify($logUser['password'],$LogUser->getpassword() ))
    {
        $_SESSION["SessionId"]=true;
    }
    else 
    {
        $_GET["route"]="connexion";
    }
}
?>