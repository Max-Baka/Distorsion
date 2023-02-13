<?php
require 'class/User.php';
require 'AbstractManager.php';
class UserManager extends AbstractManager {
    
    public function __construct(string $dbName, string $port, string $host, string $username, string $password)
    {
        $this->dbname = "kilyangerard_distorsion";
        $this->port = "3306";
        $this->host = "db.3wa.io";
        $this->username = "kilyangerard";
        $this->password = "e17f39e5cb4de95dba99a2edd6835ab4";
        $this->initDb();
    }
    
    public function getUserById(int $id) : User
    {
       
        $query = $this->db->prepare("SELECT * FROM user WHERE id=:id");
        $parameters = [
            'id'=>$id
        ];
        $query->execute($parameters);
        $users = $query->fetch(PDO::FETCH_ASSOC);
        $return = new User($users["username"],$users["email"],$users["password"]);
        $return->setId($users["id"]);
        
        return $return;
    }
    
    public function insertUser(User $user) : User
    {
        $query = $this->db->prepare('INSERT INTO user VALUES (null, :value1, :value2, :value3)');
        $parameter = [
        'value1' => $user->getUsername(),
        'value2' => $user->getEmail(),
        'value3' => $user->getPassword()
        ];
        $query->execute($parameter);
        
        $query = $this->db->prepare("SELECT * FROM user WHERE email=:value");
        $parameters = ['value' => $user->getEmail()];
        $query->execute($parameters);
        $users = $query->fetch(PDO::FETCH_ASSOC);
        $UserToReturn = new User ("username","email","password");
        $UserToReturn->setId($users["id"]);
        return $UserToReturn ;
    }
    
}
?>