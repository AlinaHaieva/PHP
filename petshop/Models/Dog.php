<?php
require_once("Pet.php");

class Dog extends Pet
{
    public function __construct($name, $price, $color, $fluffiness, $type)
    {
        parent::__construct($name, $price, $color);
        $this->fluffiness = $this->isFluffy();
        $this->type = "dog";
    }

    public function isFluffy()
    {
        return false;
    }

}
