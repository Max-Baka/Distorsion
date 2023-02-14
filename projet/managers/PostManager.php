<?php
require 'class/Post.php';
class PostManager extends AbstractManager {
    
    public function __construct(string $dbName, string $port, string $host, string $username, string $password)
    {
        $this->dbname = "kilyangerard_distorsion";
        $this->port = "3306";
        $this->host = "db.3wa.io";
        $this->username = "kilyangerard";
        $this->password = "e17f39e5cb4de95dba99a2edd6835ab4";
        $this->initDb();
    }
    public function getPostById(int $id) : Post
    {
       
        $query = $this->db->prepare("SELECT * FROM posts WHERE id=:id");
        $parameters = [
            'id'=>$id
        ];
        $query->execute($parameters);
        $posts = $query->fetch(PDO::FETCH_ASSOC);
        $return = new Post($posts["text"],$posts["salon"]);
        $return->setId($posts["id"]);
        
        return $return;
    }
    public function insertPOST(Post $post) : Post
    {
        $query = $this->db->prepare('INSERT INTO posts VALUES (null, :value1, :value2)');
        $parameters = [
        'value1' => $post->getText(),
        'value2' => $post->getSalon()
        ];
        $query->execute($parameters);
        
        $query = $this->db->prepare("SELECT * FROM posts WHERE Salon=:value");
        $parameter = ['value' => $post->getSalon()];
        $query->execute($parameter);
        $posts = $query->fetch(PDO::FETCH_ASSOC);
        $postToReturn = new Post($posts["text"],$posts["salon"]);
        $postToReturn->setId($posts["id"]);
        return $postToReturn;
    }
    
}
?>