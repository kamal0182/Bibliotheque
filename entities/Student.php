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
$role1 = new Role(1,"Student");
$admin1 = new Student(1,"younes","kamal","kamalyouness277@gmail.com","kamal1234",$role1);
$cate = new Category(1,"Drama");
$livre1 = new Livre(1,"message from underground","dostoevsky",$cate);

echo "<pre>" ;


$admin2 = new Student(3,"younes","kamal","ascascasc@gmail.com","kamal1234",$role1);

$admin1->createReservation($livre1 , $admin2);
$admin1->createReservation($livre1 , $admin1);

echo "<pre>" ;
var_dump($admin1);
echo "</pre>";
?>