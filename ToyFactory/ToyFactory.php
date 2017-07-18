<?php

class Toy
{
    public function sayGetClass()
    {
        echo get_class($this);
    }
}

class Car extends Toy {}

class WoodenCar extends Car {}

class PlasticCar extends Car {}

class Doll extends Toy {}

class WoodenDoll extends Doll {}

class PlasticDoll extends Doll {}

abstract class Factory
{
    abstract public function getCar();

    abstract public function getDoll();
}

class WoodenFactory
{
    public function getCar()
    {
        return new WoodenCar();
    }

    public function getDoll()
    {
        return new WoodenDoll();
    }
}

class PlasticFactory
{
    public function getCar()
    {
        return new PlasticCar();
    }

    public function getDoll()
    {
        return new PlasticDoll();
    }
}

$factories = ["wooden" => new WoodenFactory(), "plastic" => new PlasticFactory()];

$factories["wooden"]->getDoll()->sayGetClass();
$factories["plastic"]->getDoll()->sayGetClass();