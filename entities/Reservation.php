<?php
require_once "Role.php";    
require_once "Livre.php";
require_once "Student.php";
require_once "Eta.php";

class Reservation {
    private $id ;
    private Livre $livre; 
    private Student $apprenant ;
    private $currentDate ;
    private $finaledate ;
    private $eta ; 
    public function __construct($id , Livre $livre , Student $apprennante , $currentDate , $finaledate , Eta $eta  ) {
        $this->id = $id;
        $this->livre = $livre ; 
        $this->apprenant = $apprennante;
        $this->currentDate = $currentDate ;
        $this->finaledate  = $finaledate ; 
        $this->eta = $eta ;
    }
    public function getLivre(){
        return $this->livre->getname(); 
    }
    public function getstudentname(){
        // return $this->apprenant->; 
    }
    public function getcurentDate(){
        return $this->currentDate; 
    }
    public function getFinaldate(){
        return $this->finaledate; 
    }
    public function getEta(){
        return $this->eta->getname(); 
    }
}

?>