<?php
    require_once "Pet.php";
    require_once "Cat.php";
    require_once "Dog.php";
    require_once "Hamster.php";
    require_once "petshopMain.php";

class PetShop
{
    public $petsArray = [];

    public function addPet($pet) {
        $this->petsArray = $pet;
    }

    function getCatsArray()
    {
        $catsArray = [];
        foreach ($this->petsArray as $onePet) {
            if ($onePet->type == "cat") {
                $catsArray[] = $onePet;
                return $catsArray;
            }
        }
        return $catsArray;
    }

    public function getAllCats()
    {
        $catsArray = [];
        foreach ($this->petsArray as $pet) {
            if ($pet instanceof Cat) {
                $catsArray[] = $pet;
            }
        }
        return $catsArray;
    }

    public function getWhiteOrFluffy()
    {
        $whiteOrFluffyArray = [];

        foreach($this->petsArray as $pet) {
            if ($pet->isYourColor() === "white" || $pet->isFluffy() !== false) {
                $whiteOrFluffy[] = $pet;
            }
        }
        return $whiteOrFluffyArray;
    }

    public function getExpensive($averagePrice)
    {
        $theMostExpensive = [];

        foreach ($this->petsArray as $pet) {
            if ($pet->price <= $averagePrice) {
                continue;
            } else {
                return $theMostExpensive[] = $pet;
            }
        }
        return $theMostExpensive;
    }
}
