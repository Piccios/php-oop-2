<?php

require_once __DIR__ . '/ProductType.php';

class Food extends ProductType {
    private $material;
    public function __construct ($name,  $category, $species, $price ) {
        parent::__construct($name,  $category, $species, $price );
    }

    /**
     * This funciton returns the product material
     *
     * @return void
     */
    public function getMaterial() {
        return $this->material;
    }

    /**
     * This function returns the product material
     *
     * @param [string] $material
     * @return void
     */
    public function setMaterial($material) {
        $this->material = $material;
    }
}