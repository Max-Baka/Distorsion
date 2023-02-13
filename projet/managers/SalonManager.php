<?php
require 'class/Salon.php';
class SalonManager extends AbstractManager {
    
    public function __construct(string $dbName, string $port, string $host, string $username, string $password)
    {
        $this->dbname = "kilyangerard_distorsion";
        $this->port = "3306";
        $this->host = "db.3wa.io";
        $this->username = "kilyangerard";
        $this->password = "e17f39e5cb4de95dba99a2edd6835ab4";
        $this->initDb();
    }
    public function getSalonById(int $id) : Salon
    {
       
        $query = $this->db->prepare("SELECT * FROM salon WHERE id=:id");
        $parameters = [
            'id'=>$id
        ];
        $query->execute($parameters);
        $salons = $query->fetch(PDO::FETCH_ASSOC);
        $return = new Salon($salons["name"],$salons["category_id"]);
        $return->setId($salons["id"]);
        
        return $return;
    }
    public function insertSalon(Salon $salon) : Salon
    {
        $query = $this->db->prepare('INSERT INTO salon VALUES (null, :value1, :value2)');
        $parameters = [
        'value1' => $salon->getName(),
        'value2' => $salon->getCategory_id()
        ];
        $query->execute($parameters);
        
        $query = $this->db->prepare("SELECT * FROM salon WHERE name=:value");
        $parameter = ['value' => $salon->getName()];
        $query->execute($parameter);
        $salons = $query->fetch(PDO::FETCH_ASSOC);
        $UserToReturn = new Salon($salons["name"],$salons["category_id"]);
        $UserToReturn->setId($salons["id"]);
        return $UserToReturn ;
    }
}
?>