<?php
require_once("Pet.php");
require_once("Fluffy.php");

class Hamster extends Pet
{
    public function __construct($name, $price, $color, $fluffiness, $type)
    {
        parent::__construct($name, $price, $color);
        $this->name = "Hamster";
        $this->fluffiness = $fluffiness;
        $this->type = "hamster";
    }

    use Fluffy;
}
