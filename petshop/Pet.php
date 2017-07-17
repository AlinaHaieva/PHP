<?php
abstract class Pet
{
    public $color;
    public $price;

    public function isYourName($name)
    {
        if ($name !== $this->name) {
            return "Is my name {$name}? No, I have another name, I am {$this->name}; ";
        }
        return "Yes, I am {$name}; ";
    }

    public function isYourColor($color)
    {
        if ($color !== $this->color) {
            return "Is my color {$color}? No, I have another color, I am {$this->color}; ";
        } else {
            return $this->color;
        }
    }
}
