<?php
class Salon {

    // private attribute
    private int $id;
    private string $name;
    private string $category;

    // public constructor
    public function __construct(string $name, string $category)
    {
        $this->id = -1;
        $this->name = $name;
        $this->category = $category;
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getCategory() : string
    {
        return $this->category;
    }

    // public setter
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
    public function setCategory(string $category) : void
    {
        $this->category = $category;
    }
}
?>
