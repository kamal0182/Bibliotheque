<?php

// require_once "Crud.php";
require_once "./../core/config/Crud.php";
require_once "./../core/config/Found.php";

class Role{
    private int $id ;
    private string $name ; 
    // public function __construct($id ,$name) {
    //     $this->id = $id ;
    //     $this->name = $name ;
    // }
    public function setrole($id , $name){
        $this->name = $name ;
        $this->id = $id;
        }
    public function tablename(): string{
        return "Role";
    }
    public function column(): array{
        return ["id"=>$this->name,""=>$this->name] ;
    }
    public function getbyname($name){
        $found = new Found();
       return  $found->founByName($name , "Role") ;
    }
    public function getbyid($id){
        $found = new Found();
        return    $found->foundById($id , "Role");
    }
    public function getname(){
        return $this->name ;
    }
    public function getId(){
        return $this->id ;
    }
   } 



?> 
?>