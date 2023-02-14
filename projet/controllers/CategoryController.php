<?php
class CategoryController extends AbstractController {
    private CategoryManager $manager;
    
    public function __construct()
    {
        $this->manager = new CategoryManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
    }
  
        public function createCategory(array $post)
        {
            
            if (!empty($post))
            {
                 if ($post['NomCategorie']!=='') 
                 {
                     $categoryToAdd = new Category($post["NomCategorie"]);
                     $this->manager->insertCategory($categoryToAdd);
                 }
            }
            $this->render("register-category", []);
        }
       
        

}

?>