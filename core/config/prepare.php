<?php
require_once "Crud.php" ;
// if(isset($_POST['submit'])){
//     if(!empty($_POST['name']) && !empty($_POST['prenom'])){
        

//     }
//     else {
//         echo "younes";
//     }
    
        $roles = ["name"=>$_POST['name']];
        // $prenom = $_POST['prenom'];
        // $email  = $_POST['email'];
        // $password = $_POST['password'];
        $crud = new Crud();
        $crud->Modify("Role",$roles);
        $crud->read("Role");
    
    
    
   
    


?>