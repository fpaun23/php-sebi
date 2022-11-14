<?php
require_once('DbConnectionInterface.php');

class PdoConnectionClass implements DbConnectionInterface
{
    public function __construct()
    {
        $this->openConnection();
    }
    public function openConnection()
    {
        require_once('Config.php');
        try {
            return new PDO('mysql:host='.Config::DBHOST.'; dbname='.Config::DBNAME, Config::DBUSER, Config::DBPASS);
        } catch (PDOException $e) {
            echo "There is some problem in connection: ". $e->getMessage();
        }
    }

    public function get(string $tableName):array
    {

        $query = "SELECT * from $tableName";

        $result = $this->openConnection()->query($query);

        return $result->fetchAll();
    }


    public function update(string $tableName, array $updateData):bool
    {
        $query = "UPDATE $tableName SET `email` = '$updateData[0]' WHERE `id` = $updateData[1]";

        $result = $this->openConnection()->query($query);

        return (bool) $result->rowCount();
    }


    public function insert(string $tableName, array $insertData):int
    {
        $query = "INSERT INTO $tableName (`email`) VALUES ('$insertData[0]')";
        $result = $this->openConnection()->query($query);

        return $this->openConnection()->lastInsertId();
    }

    public function delete($tableName, int $recordId):bool
    {
        $query = "DELETE FROM $tableName WHERE `id` = $recordId";
        $result = $this->openConnection()->query($query);
        
        return (bool) $result->rowCount();
    }
}
