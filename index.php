<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('ProductController.php');
require_once('CustomerControllerClass.php');
require_once('db/MysqliConnectionClass.php');


$productsControllerObj = new ProductsController(100, 'frigider');
$productsControllerObj->manageProduct();
$productsControllerObj2 = new ProductsController(101, 'frigider2');
$productsControllerObj2->manageProduct();

 //$dbCon = new PdoConnectionClass();
 //$dbCon->openConnection();
 //$customers = $dbCon->get('customer');
// $customerDelete = $dbCon->delete('customer', 1);
//$products = $dbCon->get('products');
//$customersUpdate = $dbCon->update('customer', ['test22@devnest.ro', 1]);
//$customerInsert = $dbCon->insert('customer', ['test91@devnest.ro']);
// echo '<br /> ========================================= <br />';
// echo '<pre>';
 //var_dump($customers);
// echo '<pre>';
// echo '<br /> ========================================= <br />';
$cuscon = new MysqliConnectionClass();
$customerManager = new CustomerControllerClass("customer", $cuscon);
//$customerManager->insertCustomer(['testInsert@devnest.ro']);
//$customerManager->updateCustomer(['testUpdate@devnest.ro', 7]);
//$customerManager->deleteCustomer(7);
echo '<br /> ========================================= <br />';
echo '<pre>';
var_dump($customerManager->getCustomer());
echo '<pre>';
echo '<br /> ========================================= <br />';
// $MysliConnectionObj = new MysqliConnectionClass();
// echo '<br /> ========================================= <br />';
// echo '<pre>';
// var_dump($MysliConnectionObj->get('customer'));
// echo '<pre>';
// echo '<br /> ========================================= <br />';
// $MysliConnectionObj->update('customer', ['test22@devnest.ro', 5]);
// $MysliConnectionObj->delete('customer', 11);
