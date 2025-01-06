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
// $role1 = new Role(1,"Student");
// $admin2 = new Student(1,"younes","kamal","kamalyouness277@gmail.com","kamal1234",$role1);
// $livre1 = new Livre(1,"message from underground","dostoevsky",$cate);
// $reserve  = new Reservation( 1  , $livre1 , $admin2 ,"04/01/2024" , "12/01/2024" , new Eta(1,"Pending"));
// echo "<pre>" ;
// var_dump($reserve);
// echo "</pre>";

?>