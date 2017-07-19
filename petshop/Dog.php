<?php
require_once "Pet.php";
require_once "JsonSerializablePets.php";

class Dog extends Pet implements JsonSerializablePets
{
    public $name;

    public function __construct($price, $color, $name, $type)
    {
        $this->price = $price;
        $this->color = $color;
        $this->name = $name;
        $this->type = $type;
    }

    public function isFluffy()
    {
        return false;
    }

    public function jsonSerialize()
    {
        return $this;
    }
}
