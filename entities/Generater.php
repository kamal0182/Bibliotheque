<?php
require_once "Category.php";
require_once "Tage.php";
require_once "./User.php";
require_once "./Role.php";
require_once "./Livre.php";
require_once "./../core/config/Database.php";
require_once "./../core/config/Found.php";
require_once "./../core/config/Crud.php";
require_once "index.php";
if(isset( $_GET['submit'])){
    $livre = new Livre();
    $livre->setId($_GET['livreid']);
    $livre->delet($livre->getId());
    
}

?>