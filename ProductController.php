<?php

require_once('Product.php');


class ProductsController{

    protected string $name;
    protected int $price;

    public function __construct(int $newPrice, string $newName)
    {
        $this->price = $newPrice;
        $this->name = $newName;
    }

    public function manageProduct(): void
    {
        $productsObj = new ProductsClass($this->price, $this->name);      
        $productsObj->printPriceAndName();
    }
}
?>