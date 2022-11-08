<?php
class Product implements ProductsInterface{
   public $price;
function setPrice($price){
    $this->price=$price;
}
    function getPrice(){
   return $this->price;
    }

    function printPrice(){
        print "Price: " + price;
    }

  
    /**
     */
    
} 


?>