<?php
require_once "Pet.php";

class Cat extends Pet
{
    public $name;
    public $fluffiness;

    public function __construct($price, $color, $name, $type)
    {
        $this->price = $price;
        $this->color = $color;
        $this->name = $name;
        $this->type = "cat";
    }

}
