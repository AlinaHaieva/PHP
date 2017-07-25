<?php
    require_once("Cat.php");
    require_once("Dog.php");
    require_once("Hamster.php");

class PetShop
{
    public $petsArray = [];
    public $catsArray = [];

    public function __construct()
    {
        $this->petsArray = $this->getAllPets();
        $this->catsArray = $this->getCats();
    }

    public function getAllPets()
    {
        $allPets = [];
        $dbh = new PDO("mysql:host=localhost;dbname=db_petshop", "root", "");

        foreach ($dbh->query('SELECT * FROM petshop') as $row) {

            $name = $row["name"];
            $price = $row["price"];
            $color = $row["color"];
            $fluffiness = $row["fluffiness"];
            $type = $row["type"];

            if ($row["type"] === "cat") {
                $allPets[] = new Cat($name, $price, $color, $fluffiness, $type);
            } elseif ($row["type"] === "dog") {
                $allPets[] = new Dog($name, $price, $color, $fluffiness, $type);
            } elseif ($row["type"] === "hamster") {
                $allPets[] = new Dog($name, $price, $color, $fluffiness, $type);
            }
        }

        return $allPets;
    }

    public function getCats()
    {
        $catsArray = [];

        foreach ($this->petsArray as $pet) {
            if ($pet->type === "cat") {
                $catsArray[] = $pet;
            }
        }

        return $catsArray;
    }

    public function getWhiteOrFluffy()
    {
        $whiteOrFluffyArray = [];

        foreach($this->petsArray as $pet) {
            if (($pet->color === "white") || ($pet->fluffiness > 5)) {
                $whiteOrFluffyArray[] = $pet;
            }
        }

        return $whiteOrFluffyArray;
    }

    public function averagePrice()
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
