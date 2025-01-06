<?php 
require_once "Role.php";
class User {
    private int $id ; 
    private string $name ; 
    private  string $prenom ; 
    private  string $email ;
    private string $password ;
    private  Role  $role ;
    public function __construct($id ,$name , $prenom , $email , $password , $role){
        $this->id = $id ;
        $this->name = $name;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = hash("sha256" ,$password);
        $this->role = $role;
    }
    public function getName (){
        return $this->name ;

    }
    public function getprenom (){
        return $this->prenom ;
        
    }
    public function getemail (){
        return $this->email ;
        
    }
    public function getpassword(){
        return $this->password ;
        
    }
    // public function getrole(){
    //     return $this->role  ;
    // }
    public function setName($name){
        $this->name =  $name ; 
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
    public function setrole($role){
        return $this->role = role ;  ;
    }
    public function toString(){

    }    
    public function sighnUp(){

    }
    public function login(){

    }
}
// $user1 = new User("1","younes","kamal","youenskamal@gmail.com","kamal1234",new Role(1,"Admin"));
// echo $user1->getname();
// var_dump ($user1);


?>