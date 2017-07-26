<?php
    require_once("Cat.php");
    require_once("Dog.php");
    require_once("Hamster.php");
    require_once("Constants.php");

class PetShop
{
    public $petsArray = [];
    public $catsArray = [];

    public function __construct()
    {
        $this->petsArray = $this->getAllPets();
    }

    public function getAllPets()
    {
        $allPets = [];
        $dbh = new PDO("mysql:host=localhost;dbname=db_petshop", "root", "");

        $query = $dbh->query('SELECT * FROM petshop');

        foreach ($query as $row) {
            $name = $row["name"];
            $price = $row["price"];
            $color = $row["color"];
            $fluffiness = $row["fluffiness"];
            $type = $row["type"];

            if ($type === Constants::PET_TYPE_CAT) {
                $allPets[] = new Cat($name, $price, $color, $fluffiness, $type);
            } elseif ($type === Constants::PET_TYPE_DOG) {
                $allPets[] = new Dog($name, $price, $color, $fluffiness, $type);
            } elseif ($type === Constants::PET_TYPE_HAMSTER) {
                $allPets[] = new Dog($name, $price, $color, $fluffiness, $type);
            }
        }

        return $allPets;
    }

    public function getCats()
    {
        $catsArray = [];

        foreach ($this->petsArray as $pet) {
            if ($pet->type === Constants::PET_TYPE_CAT) {
                $catsArray[] = $pet;
            }
        }

        return $catsArray;
    }

    public function getWhiteOrFluffy()
    {
        $whiteOrFluffyArray = [];

        foreach($this->petsArray as $pet) {
            if ($pet->color === Constants::PET_COLOR_WHITE || $pet->fluffiness > Constants::MIN_FLUFFY_LEVEL) {
                $whiteOrFluffyArray[] = $pet;
            }
        }

        return $whiteOrFluffyArray;
    }

    private function averagePrice()
    {
        $price = [];

        foreach ($this->petsArray as $pet) {
            $price[] = $pet->getPrice();
        }

        $averagePrice = array_sum($price) / count($price);

        return $averagePrice;
    }

    public function getExpensive()
    {
        $expensivePets = [];

        foreach ($this->petsArray as $pet) {
            if ($pet->getPrice() > $this->averagePrice()) {
                $expensivePets[] = $pet;
            }
        }

        return $expensivePets;
    }
}
