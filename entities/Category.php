<?php
   class Category{ 
    private int  $id ; 
    private $name ;
    // public function __construct($id,$name) {
    //     $this->id = $id ;
    //     $this->name = $name ;
    // }
    public function setCategoryAttributes($id,$name) {
        $this->id = $id ;
        $this->name = $name ;
    }
    public function getname(){
        return $this->name ;
    }
    
    public function getId(){
        return $this->id ;
    }
    public function findbyname($name){
        $findname = new Found();
       return $findname->founByName($name ,"category");
    }
    public function findbyid($id){
        $findid = new Found();
       return $findid->foundById($id ,"category");
    }
   }

?>