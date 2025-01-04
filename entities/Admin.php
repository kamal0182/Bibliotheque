<?php 
require_once "User.php";

class Admin extends User {
    
    public function addRole(Role  $roleName){

    }
    public function modifyrole(Role $roleName){

    }
    public function deleteRole(Role $roleName){

    }
}
$role1 = new Role(1,"Admin");
$admin1 = new Admin(1,"younes","kamal","kamalyouness277@gmail.com","kamal1234",$role1);
echo $admin1->getpassword();
echo $admin1->getname();
echo "<pre>" ;
var_dump($admin1);
echo "</pre>";



?>