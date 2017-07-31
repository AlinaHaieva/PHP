<?php
abstract class Pet
{
    public $name;
    public $color;
    public $price;
    public $fluffiness;

    public function __construct($name, $price, $color, $fluffiness)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
        $this->fluffiness = $fluffiness;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
