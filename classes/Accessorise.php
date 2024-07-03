<?php

require_once __DIR__ . '/Products.php';
class Accessorise extends Products{
    private $ImgUrl;

    public function __construct($name, $price, $species, $imgUrl){
        parent::__construct($name, $price, $species, $imgUrl);
        $this ->ImgUrl = $imgUrl;

    }
            public function getImgUrl(){
        return $this->ImgUrl;
    }

    public function setImgUrl($ImgUrl){
        $this->ImgUrl = $ImgUrl;
    }

}
