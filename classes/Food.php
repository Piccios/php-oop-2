<?php

require_once __DIR__ . '/Products.php';

class Food extends Products {
    private $material;
    private $imgUrl;

    public function __construct ($name, $species, $price, $imgUrl ) {
    parent::__construct($name,  $price, $species, $imgUrl );
    $this->imgUrl = $imgUrl;
    }


    public function getMaterial() {
        return $this->material;
    }


    public function setMaterial($material) {
        $this->material = $material;
    }


    public function getImgUrl() {
        return $this->imgUrl;
    }

    public function setImgUrl($imgUrl) {
        $this->imgUrl = $imgUrl;
    }
}