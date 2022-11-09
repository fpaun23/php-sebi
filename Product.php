<?php
require_once('ProductsInterface.php');
class Product implements ProductsInterface {
   protected int $price;
   protected string $name;

   public function __construct(int $price, string $name)
   {
       $this->price = $price;
       $this->name = $name;
   }
   
   public function setPrice(int $price): void
   {
       $this->price = $price;
   }

   public function getPrice(): int
   {
       return $this->price;
   }

   public function printPriceAndName(): void
   {
       echo '
       #######
           Numele este: ' . $this->name. '<br />
           Pretul este: ' . $this->price. '<br />
       #######    
       ';
   }


   
    
} 


?>