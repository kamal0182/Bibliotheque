<?php
require_once "./User.php";
require_once "./Role.php";
require_once "./Admin.php";


require_once "./../core/config/Database.php";
require_once "./../core/config/Found.php";
require_once "./../core/config/Crud.php";
if(isset($_POST['submit'])){
    $user = new User();
    $name = $_POST['Fname'];
    echo $name ;
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user->setattribute($name , $prenom , $email , $password );
    $user->setRolename("Apprennant");
    $user->add();

}

?>