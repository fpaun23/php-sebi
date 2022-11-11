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
        $pdoCon->openConnection();
        $result = $pdoCon->get($this->table);
        
        return $result;
    }
//     public function insertCustomer(array $insertData):int
//     {
//         $pdoCon = new PdoConnectionClass();
//     }
}
