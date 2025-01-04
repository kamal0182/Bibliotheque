<?php
class Reservation {
    private $id ;
    private $livre; 
    private $apprenant ;
    private $currentDate ;
    private $finaledate ;
    private $eta ; 
    public function __construct($id , Livre $livre , Apprennante $apprennante , $currentDate , $finaledate , Eta $eta  ) {
        $this->id = $id;
        $this->livre = $livre ; 
        $this->apprenant = $apprenant;
        $this->currentDate = $currentDate ;
        $this->finaledate  = $finaledate ; 
        $this->eta = $eta ;
    }
    public function getLivre(){
        return $this->livre ; 
    }
    

}


?>