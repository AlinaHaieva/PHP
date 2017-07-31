<?php
require_once("Pet.php");

class Hamster extends Pet
{
    public function __construct($name, $price, $color, $fluffiness, $type)
    {
        parent::__construct($name, $price, $color, $fluffiness);
        $this->name = "Hamster";
        $this->type = ConstantsPetShop::PET_TYPE_HAMSTER;
    }
}
