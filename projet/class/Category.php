<?php
class Category {

    // private attribute
    private int $id;
    private string $name;
    private array $salons;

    // public constructor
    public function __construct(string $name)
    {
        $this->id = -1;
        $this->name = $name;
        $this->salons = [];
        
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
     public function getSalons() : array
    {
        return $this->salons;
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
    public function setSalons(array $salons) : array
    {
        $this->salons = $salons;
    }

    
    public function addSalon(Salon $salons) : array
    {
        $this->salons[] = $salons;
        return $this->salons;
    }
    
}
?>