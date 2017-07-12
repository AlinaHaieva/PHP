<?php
require_once "Pet.php";

class Hamster extends Pet
{
    public $fluffiness;

    public function __construct($price, $color, $type)
    {
        $this->price = $price;
        $this->color = $color;
        $this->type = "hamster";
    }

    public function isYourName($name)
    {
        return "Call me just Hamster; ";
    }

}
