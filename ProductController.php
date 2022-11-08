<?php
class ProductController extends Product{
public function manageProduct(){
   $hochland = new Product();
    $hochland ->setPrice(10);
    $hochland ->printPrice();

}
}

?>