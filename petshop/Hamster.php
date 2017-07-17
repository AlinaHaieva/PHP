<?php
require_once "Pet.php";
require_once "Fluffy.php";

class Hamster extends Pet
{
    public function __construct($price, $color, $fluffiness, $type)
    {
        $this->price = $price;
        $this->color = $color;
        $this->fluffiness = $fluffiness;
        $this->type = $type;
    }

    use Fluffy;

    public function isYourName($name)
    {
        return "Call me just Hamster; ";
    }


}
