<?php
class Eta {
    private $id ;
    private $type ; 
    public function __construct($id , $type) {
        $this->id = $id;
        $this->type = $type ;
    }
    public function getType(){
        return $this->type ;
    }
    public function getId(){
        return $this->id ;
    }
    public function setType($type){
         $this->type = $type ;
    }
    public function setId($id){
         $this->id = $id  ;
    }
}
 


?>