<!--Post.php-->
<!--Votre classe Post :-->

<!--attributs private-->
<!--id int-->
<!--title string-->
<!--content string-->
<!--author qui est un User-->
<!--category qui est une PostCategory-->
<!--accesseurs public-->
<!--Pour chacun des attributs.-->

<!--constructeur-->
<!--Prend title, content, author, category en paramètres et les initialise. Initialise id avec la valeur null.-->
<?php
class Post {

    // private attribute
    private int $id;
    private string $text;
    private Salon $salon;

    // public constructor
    public function __construct(string $text, Salon $salon)
    {
        $this->id = -1;
        $this->text = $text;
        $this->salon = $salon;
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }
    public function getText() : string
    {
        return $this->text;
    }
    public function getSalon() : string
    {
        return $this->salon;
    }

    // public setter
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    public function setText(string $text) : void
    {
        $this->text = $text;
    }
    public function setSalon(string $salon) : void
    {
        $this->salon = $salon;
    }
}
?>
