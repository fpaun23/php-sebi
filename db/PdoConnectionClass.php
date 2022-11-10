<?php
class PdoConnectionClass
{

    
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'mydatabase2';

    protected $con;

    public function openConnection()
    {
        try {
            $this->con = new PDO("mysql:host=$this->dbhost; dbname=$this->dbname", $this->dbuser, $this->dbpass);
       // return $this->con;
            echo "Connected succesfully";
        } catch (PDOException $e) {
            echo "There is some problem in connection: ". $e->getMessage();
        }
    }

    public function get(string $tableName):array
    {

        $query = "SELECT * from $tableName";

        $result = $this->con->query($query);

        return $result->fetchAll();
    }


    public function update(string $tableName, array $updateData):bool
    {
        $query = "UPDATE $tableName SET `email` = '$updateData[0]' WHERE `id` = $updateData[1]";

        $result = $this->con->query($query);

        return (bool) $result->rowCount();
    }


    public function insert(string $tableName, array $insertData):int
    {
        $query = "INSERT INTO $tableName (`email`) VALUES ('$insertData[0]')";
        $result = $this->con->query($query);

        return $this->con->lastInsertId();
    }

    public function delete($tableName, int $recordId):bool
    {
        $query = "DELETE FROM $tableName WHERE `id` = $recordId";
        $result = $this->con->query($query);
        
        return (bool) $result->rowCount();
    }
// public function detele($tablename, int $recordld):bool{
// $sql = "DELETE FROM $tablename WHERE PRIMARY KEY = $recordId ";
// $affectedrows = $this->dbname->exec($sql);
// if(isset($affectedrows))
// {
//     echo "Record has been succesfully deleted";
// }
// }

    public function closeConnection()
    {
        $this->con = null;
    }
}
