<?php
require_once "Category.php";
require_once "Tage.php";
   class Livre{
    private $id ;
    private $name ; 
    private $auteur ;
    private $category ; 
    private $tags = [];
    public function __construct($id , $name , $auteur ,Category $category ) {
        $this->id = $id;
        $this->name = $name ;
        $this->auteur = $auteur ;
        $this->category = $category ;
    }
    public function getname (){
        return $this->name ;

    }
    public function getId (){
        return $this->id ;

    }
    public function getAuteur(){
        return $this->auteur ;

    }
    
    public function addTags(Tage $tage){
        $this->tags[]  = $tage ;
    }
    public function getTags(){
        return $this->tags ;
    }

   }
   $cate = new Category(1,"Drama");
   $livre1 = new Livre(1,"message from underground","dostoevsky",$cate);
   $tag = new Tage(1,"Action");
   $tag1 = new Tage(2,"Western");
   $livre1->addTags($tag);
   $livre1->addTags($tag1);
   foreach($livre1->getTags() as $livre){
       echo $livre->getName();
           
   }
   //    echo $livre1->tag ;
   echo "<pre>" ;
   
   echo "</pre>";

?>