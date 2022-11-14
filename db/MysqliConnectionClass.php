<?php

class MysqliConnectionClass implements DbConnectionInterface
{

    public function __construct()
    {
        $this->openConnection();
    }
    public function openConnection()
    {
        require_once('Config.php');
        return new mysqli(Config::DBHOST, Config::DBUSER, Config::DBPASS, Config::DBNAME);
    }
    public function get(string $tableName):array
    {
       
        $sql = "SELECT * from $tableName";
        $result =$this->openConnection()->query($sql);
        return $result->fetch_all();

    }
    public function update(string $tableName, array $updateData):bool
    {
        $sql = "UPDATE $tableName set `email` ='$updateData[0]' where `id` = $updateData[1]";
        return $result = $this->openConnection()->query($sql);
    }
    public function insert(string $tableName, array $insertData):int
    {
        $sql = "INSERT INTO $tableName (`email`) VALUES ('$insertData[0]')";
        return $result = $this->openConnection()->query($sql);
    }
    public function delete($tableName, int $recordId):bool
    {
        $sql = "DELETE FROM $tableName WHERE `id` = $recordId";
        return $result = $this->openConnection()->query($sql);
    }
}
