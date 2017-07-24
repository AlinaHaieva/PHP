<?php
require_once("Pet.php");
require_once("Fluffy.php");

class Cat extends Pet
{
    public function __construct($name, $price, $color, $fluffiness, $type)
    {
        parent::__construct($name, $price, $color);
        $this->fluffiness = $fluffiness;
        $this->type = "cat";
    }

    use Fluffy;
}
