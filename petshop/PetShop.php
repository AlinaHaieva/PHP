<?php
    require_once "Pet.php";
    require_once "Cat.php";
    require_once "Dog.php";
    require_once "Hamster.php";
    require_once "petshopMain.php";

class PetShop
{
    public $petsArr = [];

    public function addPet($pet) {
        $this->petsArr[] = $pet;
    }

    public function getCats()
    {
        $catsArray = [];

        foreach ($this->petsArr as $pet) {
            if ($pet->type === "cat") {
                $catsArray[] = $pet;
            }
        }

        $catsString = serialize($catsArray);
        return $catsString;
    }

    public function getWhiteOrFluffy()
    {
        $whiteOrFluffyArray = [];

        foreach($this->petsArr as $pet) {
            if (($pet->color == "white") || ($pet->isFluffy())) {
                $whiteOrFluffyArray[] = $pet;
            }
        }

        $whiteOrFluffyPetsString = serialize($whiteOrFluffyArray);
        return $whiteOrFluffyPetsString;
    }

    public function getExpensive($averagePrice)
    {
        $theMostExpensive = [];

        foreach ($this->petsArr as $pet) {
            if ($pet->price <= $averagePrice) {
                continue;
            } else {
                $theMostExpensive[] = $pet;
            }
        }

        $expensivePetsString = serialize($theMostExpensive);
        return $expensivePetsString;
    }
}
