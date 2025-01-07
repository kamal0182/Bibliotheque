<?php
require_once "User.php";
require_once "Category.php";
require_once "Tage.php";
require_once "Role.php";    
require_once "Livre.php";
require_once "Student.php";
require_once "Reservation.php";
require_once "Eta.php";
class Student extends User {
    private $reservation = [] ;
    public function createReservation(Livre $livre  , $admin2){
        $reserve  = new Reservation( 1  , $livre, $admin2 ,"04/01/2024" , "12/01/2024" , new Eta(1,"Pending"));
        $this->reservation [] = $reserve ;
        return $this->reservation ;   
    }
    public function anullerReservation(){
       
    }
}

?>