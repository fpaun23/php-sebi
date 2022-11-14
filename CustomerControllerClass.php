<?php

require_once('db/PdoConnectionClass.php');

class CustomerControllerClass
{
    protected string $table = "customer";
    protected $cuscon;
    public function __construct(string $table, DbConnectionInterface $cuscon)
    {
        $this->table=$table;
        $this->cuscon = $cuscon;
    }

    public function getCustomer():array
    {
        return $this->cuscon->get($this->table);
    }
    public function insertCustomer(array $insertData):int
    {
        return $this->cuscon->insert($this->table, $insertData);
    }

    public function updateCustomer(array $updateData):bool
    {
        return $this->cuscon->update($this->table, $updateData);
    }

    public function deleteCustomer(int $customerId):bool
    {
        return $this->cuscon->delete($this->table, $customerId);
    }
}
