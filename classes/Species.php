<?php

class Species
{
    private $species;

    public function __construct($species){
        $this->species = $species;
    }

    /**
     * This function returns the species 
     *
     * @return void
     */
    public function getSpecies(){
        return $this->species;
    }

    public function setSpecies($species) {
        $this->species = $species;
    }

    public function __toString() {
        return $this->species;
    }
}
