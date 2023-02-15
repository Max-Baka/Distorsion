<?php
class PostController extends AbstractController {
    private PostManager $manager;
    
    public function __construct()
    {
        $this->manager = new PostManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
    }
  
        public function createPost(array $post)
        {
            $SM = new SalonManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
            
            if (!empty($post))
            {
                 if ($post['NomPost']!=='' && $post["salon"]!=='') 
                 {
                     $PostToAdd = new Post($post["NomPost"], $post["salon"]);
                     $this->manager->insertPost($PostToAdd);
                 }
            }
            $Salons=$SM->findAllSalon();
            $this->render("register-post", $Salons);
        }
}

?>