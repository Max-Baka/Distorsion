<?php
class Post {

    // private attribute
    private ?int $id;
    private string $text;
    private int $salon_id;

    // public constructor
    public function __construct(string $text, int $salon_id)
    {
        $this->id = null;
        $this->text = $text;
        $this->salon_id = $salon_id;
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
    public function getSalon_id() : int
    {
        return $this->salon_id;
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
    public function setSalon_id(int $salon_id) : void
    {
        $this->salon_id = $salon_id;
    }
}
?>
