<?php

require_once __DIR__ . '/Products.php';

class Toys extends Products{
    private $Imgurl;


    public function __construct ($name, $price, $species, $imgUrl){
        parent::__construct($name, $price, $species);
        $this->Imgurl = $imgUrl;
    }

    public function getImgUrl(){
        return $this->Imgurl;
    }

    public function setImgUrl($Imgurl){
        $this->Imgurl = $Imgurl;
    }

}