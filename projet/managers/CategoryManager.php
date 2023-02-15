<?php
require 'class/Category.php';
class CategoryManager extends AbstractManager {
    
    public function __construct(string $dbName, string $port, string $host, string $username, string $password)
    {
        $this->dbname = "kilyangerard_distorsion";
        $this->port = "3306";
        $this->host = "db.3wa.io";
        $this->username = "kilyangerard";
        $this->password = "e17f39e5cb4de95dba99a2edd6835ab4";
        $this->initDb();
    }
    public function getCategoryById(int $id) : Category
    {
       
        $query = $this->db->prepare("SELECT * FROM category WHERE id=:id");
        $parameters = [
            'id'=>$id
        ];
        $query->execute($parameters);
        $categorys = $query->fetch(PDO::FETCH_ASSOC);
        $return = new Category($categorys["name"]);
        $return->setId($categorys["id"]);
        
        return $return;
    }
    public function insertCategory(Category $category) : Category
    {
        $query = $this->db->prepare('INSERT INTO category VALUES (null, :value1)');
        $parameters = [
        'value1' => $category->getName()
        ];
        $query->execute($parameters);
        $query = $this->db->prepare("SELECT * FROM category WHERE name=:value");
        $parameter = ['value' => $category->getName()];
        $query->execute($parameter);
        $categorys = $query->fetch(PDO::FETCH_ASSOC);
        $categoryToReturn = new Category($categorys["name"]);
        $categoryToReturn->setId($categorys["id"]);
        return $categoryToReturn;
     
    }
    function findAllCategory() : array
        {
            $query = $this->db->prepare("SELECT * FROM category");
            $query->execute([]);
            $categorys = $query->fetchAll(PDO::FETCH_ASSOC);
          
            $return = [];
            foreach ($categorys as $category)
            {
                $newCat = new Category($category["name"]);
                $newCat->setId($category["id"]);
                $return[]=$newCat;
            }
            return $return;
        }
}
?>