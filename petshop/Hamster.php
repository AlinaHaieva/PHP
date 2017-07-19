<?php
require_once "Pet.php";
require_once "Fluffy.php";
require_once "JsonSerializablePets.php";

class Hamster extends Pet implements JsonSerializablePets
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

    public function jsonSerialize()
    {
        return $this;
    }
}
