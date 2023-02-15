<?php
class Post {

    // private attribute
    private ?int $id;
    private string $text;
    private string $salon;

    // public constructor
    public function __construct(string $text, string $salon)
    {
        $this->id=null;
        $this->text=$text;
        $this->salon=$salon;
    }

    // public getter
    public function getId() : ?int
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
    public function setId(?int $id) : void
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
