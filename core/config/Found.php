<?php
require_once "Database.php";
class Found {
    private $db  ; 
    
    public function __construct() {
        $this->db = (new Database())->connection();
    }
    public function founByName($name , $tablename) {
        $sql = "SELECT id  FROM ${tablename}  Where name = " ."'".$name."'";  ;
        $stmt =  $this->db->prepare($sql);
        if($result =  $stmt->execute()){
            return $result ;
        }
        else {
            return "Not found";
        }
        
        
    }

    public function foundById($id , $tablename){
        $sql1 = "SELECT   name FROM ${tablename} WHERE id = " .$id;  
        $result1 =  $this->db->query($sql1)->fetch(PDO::FETCH_OBJ);
       
        return  ($result1->name);
    }
    public function findbyEmail($email , $password ){
        $sql1 = "SELECT   *  FROM User WHERE email = "."'" .$email ."'" ."  AND password = " ."'" .$password ."'";  
        echo $sql1 ;
        $result1 =  $this->db->query($sql1)->fetch(PDO::FETCH_OBJ);
       
        return  $result1->id ;
    }
    

}



?>