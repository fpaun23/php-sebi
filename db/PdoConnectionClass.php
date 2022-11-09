<?php
class PdoConnectionClass{

    
private $dbhost = 'localhost';  
private $dbuser = 'root';
private $dbpass = '';
private $dbname = 'mydatabase2';
private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
//private $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
protected $con;

public function openConnection(){
    try{
        $this->con = new PDO("mysql:host={$this->dbhost}; dbname={$this->dbname}", $this->dbpass, $this->dbuser, $this->options);
        return $this->con;
    }
    catch (PDOException $e){
        echo "There is some problem in connection: ". $e->getMessage();
    }
}

public function get(string $tableName){
$sql = "SELECT * from $tableName";
}

public function update(string $tableName, array $updateData):bool{
$sql = "UPDATE $tableName SET VALUES from $updateData";
$affectedrows = $this->dbname->exec($sql);
if(isset($affectedrows)){
    echo "Record has been succesfully updated";

}
}
public function insert (string $tableName, array $insertData):int{
$stm = $this->dbname->prepare("INSERT INTO $tableName VALUES from $insertData");
$stm -> execute(array($insertData));
}

public function detele($tablename, int $recordld):bool{
$sql = "DELETE FROM $tablename WHERE PRIMARY KEY = $recordId ";
$affectedrows = $this->dbname->exec($sql);
if(isset($affectedrows))
{
    echo "Record has been succesfully deleted";
}
}

public function closeConnection() {
    $this->con = null;
}
}


?>