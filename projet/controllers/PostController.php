<?php
class PostController extends AbstractController {
    private PostManager $manager;
    
    public function __construct()
    {
        $this->manager = new PostManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
    }
  
        public function createPost(array $post)
        {
            
            if (!empty($post))
            {
                 if ($post['NomPost']!=='') 
                 {
                     $PostToAdd = new Post($post["NomPost"], $post["post"]);
                     $this->manager->insertPost($PostToAdd);
                 }
            }
            $this->render("register-post", []);
        }
       
        public function displaysalon()
        {
            $salon=$this->manager->findAllSalon();
            var_dump($salon);
            return $salon;
        }
        

}

?>