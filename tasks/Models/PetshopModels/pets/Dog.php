<?php
require_once("Pet.php");

class Dog extends Pet
{
    public function __construct($name, $price, $color, $fluffiness, $type)
    {
        parent::__construct($name, $price, $color, $fluffiness);
        $this->type = ConstantsPetShop::PET_TYPE_DOG;
    }
}
