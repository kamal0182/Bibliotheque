<?php 
require_once "User.php";
require_once "Livre.php";



class Admin extends User {
    private Livre $livre ;
    // public function createLivre ( $name , $auteur ){
    //     return new Livre(  $name , $auteur );
    // }
    public function  setlivre (Livre $livre){
        $this->livre = $livre ;
    }
    public function  getlivre (){
      return   $this->livre ;
    }
    // public function addRole(Role  $roleName){

    // }
    // public function modifyrole(Role $roleName){

    // }
    // public function deleteRole(Role $roleName){

    // }
}




?>