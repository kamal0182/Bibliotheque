<?php
require_once "Database.php";
class Crud {
    private $db ;
    private $dbname  = "biblioschool"; 
    private $password = "kamal12345";
    private $username= "root";
    private $servername = "localhost";
     public function __construct() {
        $this->db = (new Database())->connection();
        
    }
    public function read($table){
        // var_dump($mdb);
        // $column  = implode(",");
      $sql = "SELECT  * from ${table}" ;
            $stmt =  $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            var_dump($result);
    }
    public function add($table,$column){
        $keys = array_keys($column);
        $joincloumn = implode(",",$keys);
        $arrValues = array_values($column);
        $joincloumn1 = implode(",",$arrValues);
        echo $joincloumn1 ;   
        $sql = "INSERT INTO ${table} ( ${joincloumn}) values('${joincloumn1}')" ;
            $stmt =  $this->db->prepare($sql);
            $stmt->execute();
    }
    public function delet($id,$table){
        $keys = array_keys($column);
        $joincloumn = implode(",",$keys);
        $arrValues = array_values($column);
        $joincloumn1 = implode(",",$arrValues);
        echo $joincloumn1 ;   
        $sql = "DELETE FROM  ${table} WHERE id = ${id}" ;
            $stmt =  $this->db->prepare($sql);
            $stmt->execute();
    }
    // public function Modify($table,$column){
    //     $keys = array_keys($column);
    //     $joincloumn = implode(",",$keys);
    //     $arrValues = array_values($column);
    //     $joincloumn1 = implode(",",$arrValues);
    //     echo $joincloumn1 ;   
    //     $sql = " ${table} ( ${joincloumn}) values('${joincloumn1}')" ;
    //         $stmt =  $this->db->prepare($sql);
    //         $stmt->execute();
    // }

}



?>