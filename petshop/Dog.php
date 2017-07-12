<?php
require_once "Pet.php";

class Dog extends Pet
{
    public $name;

    public function __construct($price, $color, $name, $type)
    {
        $this->price = $price;
        $this->color = $color;
        $this->name = $name;
        $this->type = "dog";
    }

    public function isFluffy()
    {
        return false;
    }

}
