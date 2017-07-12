<?php
    require_once "Pet.php";
    require_once "Cat.php";
    require_once "Dog.php";
    require_once "Hamster.php";
    require_once "petshopMain.php";

class PetShop
{
    private $petsArray = [];

    function getPetsArray()
    {
        $petsArray = [];
        $petsDb = file_get_contents($file);
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
