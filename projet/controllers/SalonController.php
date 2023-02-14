<?php
class SalonController extends AbstractController {
    private SalonManager $manager;
    
    public function __construct()
    {
        $this->manager = new SalonManager("kilyangerard_distorsion","3306","db.3wa.io","kilyangerard","e17f39e5cb4de95dba99a2edd6835ab4");
    }
  
        public function createSalon(array $post)
        {
            
            if (!empty($post))
            {
                 if ($post['NomSalon']!=='') 
                 {
                     $SalonToAdd = new Salon($post["NomSalon"], $post["category"]);
                     $this->manager->insertSalon($SalonToAdd);
                 }
            }
            $this->render("register-salon", []);
        }
       
        

}

?>