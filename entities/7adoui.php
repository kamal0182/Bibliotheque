<?php
require_once "kroud.php";
class objs {
    public function one($name){
        $varia = new kroud();
        return $varia->getlengthname($name);  
    }
}
$nam = new objs();
var_dump($nam->one("7adoui"));
?>