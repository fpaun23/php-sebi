<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('ProductController.php');

$productsControllerObj = new ProductsController(100, 'frigider');
$productsControllerObj->manageProduct();
$productsControllerObj2 = new ProductsController(101, 'frigider2');
$productsControllerObj2->manageProduct();

?>