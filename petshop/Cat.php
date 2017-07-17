<?php
require_once "Pet.php";
require_once "Fluffy.php";

class Cat extends Pet
{
    public $name;

    public function __construct($price, $color, $name, $fluffiness, $type)
    {
        $this->price = $price;
        $this->color = $color;
        $this->name = $name;
        $this->fluffiness = $fluffiness;
        $this->type = $type;
    }

    use Fluffy;
}
