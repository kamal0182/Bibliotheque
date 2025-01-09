<?php
require_once "Category.php";
require_once "Tage.php";
require_once "./User.php";
require_once "./Role.php";
require_once "./../core/config/Database.php";
require_once "./../core/config/Found.php";
require_once "./../core/config/Crud.php";
   class Livre extends Crud {
    private $id ;
    private $img ; 
    private $name ; 
    private $auteur ;
    private Category  $category ; 
    
    private $tags  = [] ; 
    public function setAttributes( $name , $auteur ) {
        
        $this->name = $name ;
        $this->auteur = $auteur ;
        // $this->category = $category ;
    }
    // public function createLivre( $name , $auteur ,Category $category ,Tag $tag ) {
    //     $this->name = $name ;
    //     $this->auteur = $auteur ;
    //     $this->category = $category ;
    //     $this->Tag [] = $tag;
    // }
    public function tablename(): string{
        return "livre";
    }
    public function column(): array{
        return ["name"=>$this->name,"auteur"=>$this->auteur,"id_Category"=>$this->category->getId(),"image"=>$this->img] ;
    }
    public function setId($id){
        $this->id = $id ;
    }
    public function getname (){
        return $this->name ;
    }
    public function Setcategory($name){
       $this->category = new category();
       $category_id  =   $this->category->findbyname($name);
        $this->category->setCategoryAttributes($category_id,$name);
    }
    public function SetcategoryId($id){
        $this->category = new category();
        $category_name  =   $this->category->findbyid($id);
         $this->category->setCategoryAttributes($id,$category_name);
     }
    // public function getTags($name){
    //     $this->tag = new Tag();
    //     $category_id = $this->category->findbyname($name);
    //      $this->category->setCategoryAttributes($category_id,$name));
    //  }
    public function getId (){
        return $this->id ;
    }
    public function getImage (){
        return $this->img ;
    }
    public function getAuteur(){
        return $this->auteur ;

    }
    
    
    public function addTags( ){
         
    }
   public function getCategory(){
    return $this->category ;
   }
   }
  
   
//    $cate = new Category(1,"Drama");
//    $livre1 = new Livre("message from underground","dostoevsky",$cate);
//    $tag = new Tage(1,"Action");
//    $tag1 = new Tage(2,"Western");
//    $livre1->addTags($tag);
//    $livre1->addTags($tag1);
//    foreach($livre1->getTags() as $livre){
//        echo $livre->getName();
           
//    }
//    //    echo $livre1->tag ;
//    echo "<pre>" ;
   
//    echo "</pre>";

?>