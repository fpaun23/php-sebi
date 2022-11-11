<?php

require_once('db/PdoConnectionClass.php');

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
        return $result = $pdoCon->get($this->table);
    }
    public function insertCustomer(array $insertData):int
    {
        $pdoCon = new PdoConnectionClass();
        $pdoCon->openConnection();
        return $result = $pdoCon->insert($this->table, $insertData);
    }

    public function updateCustomer(array $updateData):bool
    {
        $pdoCon = new PdoConnectionClass();
        $pdoCon->openConnection();
        return $result = $pdoCon->update($this->table, $updateData);
    }

    public function deleteCustomer(int $customerId):bool
    {
        $pdoCon = new PdoConnectionClass();
        $pdoCon->openConnection();
        return $result = $pdoCon->delete($this->table, $customerId);
    }
}
