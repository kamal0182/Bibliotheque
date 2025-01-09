<?php 
require_once "Role.php";
require_once "./../core/config/Crud.php";
require_once "./../core/config/Found.php";

class User extends Crud {
    private int $id ; 
    private string $name ; 
    private  string $prenom ; 
    private  string $email ;
    private string $password ;
    private  Role  $role ;
    // public function __construct($id ,$name , $prenom , $email , $password ){
    //     $this->id = $id ;
    //     $this->name = $name;
    //     $this->prenom = $prenom;
    //     $this->email = $email;
    //     $this->password = $password;
    //     $this->role = $role;
    // }
    public function setattribute($name , $prenom , $email , $password ){
        
        $this->name = $name;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
    }
    public function setRolename($name){
        $this->role =  new Role();
        
        $id_role = $this->role->getbyname($name);
        echo $id_role;
        $this->role->setRole($id_role, $name);
        
    }
    public function setRoleid($id){
        $this->role =  new Role();
        $name_role = $this->role->getbyid($id);
        $this->role->setRole($id, $name_role);  
    }
    public function tablename(): string{
        return "User";
    }
    public function column(): array{
        return ["name"=>$this->name,"prenom"=>$this->prenom,"email"=>$this->email,"password"=>$this->password,"id_role"=>$this->role->getId()] ;
    }
    public function getName (){
        return $this->name ;
    }
    public function getid (){
        return $this->id ;

    }
    public function getprenom (){
        return $this->prenom ;
        
    }
    public function getemail (){
        return $this->email ;
        
    }
    public function findEmail($email , $password){
        $found = new Found();
       return ( $found->findbyEmail($email,$password))   ;
    }
    public function getRole(){
        return $this->role ;
    }
    
    public function getpassword(){
        return $this->password ;
        
    }
   
    public function setName($name){
        $this->name =  $name ; 
    }
    public function setId($id){
        $this->id =  $id ; 
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom ;
    }
    public function setEmail($email){
        $this->email = $email ; 
    }
    public function setPassword($password){
        $this->password = hash("sha256" ,$password) ; 
    }
    // public function setrole(){
    //     return $this->role = role ;  ;
    // }
    public function toString(){
    }    
    public function sighnUp(){
    }
    public function login(){
    }
}





?>