<?php
class Salon {

    // private attribute
    private ?int $id;
    private string $name;
    private int $category_id;

    // public constructor
    public function __construct(string $name, int $category_id)
    {
        $this->id = null;
        $this->name = $name;
        $this->category_id = $category_id;
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
    public function getCategory_id() : int
    {
        return $this->category_id;
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
    public function setCategory(int $category_id) : void
    {
        $this->category_id = $category_id;
    }
}
?>
