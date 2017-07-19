<?php
require_once "Pet.php";
require_once "Fluffy.php";
require_once "JsonSerializablePets.php";

class Cat extends Pet implements JsonSerializablePets
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

    public function jsonSerialize()
    {
        return $this;
    }

    use Fluffy;
}
