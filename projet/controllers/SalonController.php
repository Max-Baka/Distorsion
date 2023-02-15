<?php
class SalonController extends AbstractController {
    private SalonManager $manager;
    
    public function __construct()
    {
        
        $this->manager = new SalonManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
    }
  
        public function createSalon(array $post)
        {
            $CM = new CategoryManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
            
            if (!empty($post))
            {
                var_dump($post["cat"]);
                var_dump($post['NomSalon']);
                 if ($post['NomSalon']!=='' && $post["cat"]!=='') 
                 {
                     $SalonToAdd = new Salon($post["NomSalon"], $post["cat"]);
                     $this->manager->insertSalon($SalonToAdd);
                 }
            }
            $Categories=$CM->findAllCategory();
            $this->render("register-salon", $Categories);
            
        }
}

?>