<?php
abstract class Pet
{
    protected $name;
    protected $color;
    protected $price;

    public function __construct($name, $price, $color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
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
