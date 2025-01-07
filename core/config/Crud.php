<?php
require_once "Database.php";
abstract class Crud {
    private $db ;
    abstract function tablename(): string ;
    abstract function column(): array ;
    public function read(){
        $this->db = (new Database())->connection();
        
    $tablename = $this->tablename();
   
      $sql = "SELECT  * from ${tablename}" ;
      $stmt =  $this->db->prepare($sql);
      $stmt->execute();
     $result = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $result ;
    }
    public function add(){
        $this->db = (new Database())->connection();
        $keys = array_keys($this->column());
        $joincloumn = implode(",",$keys);
        $arrValues = array_values($this->column());
        $joincloumn1 = implode("','",$arrValues);
        $tablename = $this->tablename();
        $sql = "INSERT INTO ${tablename} ( ${joincloumn}) values ('${joincloumn1}')" ;
        $stmt =  $this->db->prepare($sql);
        $stmt->execute();
        return $this->db->lastInsertId();
        
        
        
    }
    public function delet($id){
        // $keys = array_keys($column);
        // $joincloumn = implode(",",$keys);
        // $arrValues = array_values($column);
        $joincloumn1 = implode(",",$arrValues);
        $tablename = $this->tablename();
        echo $joincloumn1 ;   
        $sql = "DELETE FROM  ${tablename} WHERE id = ${id}" ;
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