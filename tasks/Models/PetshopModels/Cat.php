<?php
require_once("Pet.php");

class Cat extends Pet
{
    public function __construct($name, $price, $color, $fluffiness, $type)
    {
        parent::__construct($name, $price, $color, $fluffiness);
        $this->type = Constants::PET_TYPE_CAT;
    }
}
