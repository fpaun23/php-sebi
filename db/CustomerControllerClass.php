<?php

require_once('db/CustomerControllerClass.php');
class CustomerControllerClass
{
    protected string $table = "customer";
  
    public function __construct(string $table)
    {
        $this->table=$table;
    }

    public function getCustomer():array
    {
        $pdoCon = new PdoConnectionClass();
        $customer = $this->table;
        $result = $pdoCon->get($customer);
        return $result;
    }
//     public function insertCustomer(array $insertData):int
//     {
//         $pdoCon = new PdoConnectionClass();
//     }
}
