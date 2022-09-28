<?php

class laptop {
  
   public $pemilik = "Ibnu";
   public $merk = "Oddo";
   
   public function __construct(){
     echo "Ini berasal dari Constructor Laptop";
   }
  
   public function hidupkan_laptop(){
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
  
   }
   public function __destruct(){
     echo "Ini berasal dari Destructor Laptop";
   }
}
  

$laptop_ibnu= new laptop();
  
echo "<br />";
echo $laptop_ibnu->hidupkan_laptop();
echo "<br />";
?>