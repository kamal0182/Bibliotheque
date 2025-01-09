<?php
    require_once "./User.php";
    require_once "./Role.php";
    require_once "./Admin.php";
    
    
    require_once "./../core/config/Database.php";
    require_once "./../core/config/Found.php";
    require_once "./../core/config/Crud.php";
    if(isset($_POST['submit'])){
       
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = new User() ;
       $result =  $user->findEmail($email , $password);
       var_dump($result);

    }
        
?>