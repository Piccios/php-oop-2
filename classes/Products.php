<?php

class Products {
    private $name;
    private $price;
    private $species;  

    public function __construct($name, $price, $species)
    {
        $this->name = $name;
        $this->price = $price;
        $this->species = $species;  
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }


    public function getSpecies() {
        return $this->species;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function species($species) {
        $this->species = $species;
    }
}
