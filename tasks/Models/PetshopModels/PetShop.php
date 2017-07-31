<?php
    require_once "pets/Cat.php";
    require_once "pets/Dog.php";
    require_once "pets/Hamster.php";
    require_once "pets/ConstantsPetShop.php";
    require_once "tasksDatabase.php";

class PetShop
{
    private $petsArray = [];

    public function getAllPetsFromDB() {
        $query = TasksDatabase::createTasksDb()->query('SELECT * FROM pet_shop');

        return $query;
    }

    public function createPetsObjectsArray()
    {
        foreach ($this->getAllPetsFromDB() as $row) {
            $name = $row["name"];
            $price = $row["price"];
            $color = $row["color"];
            $fluffiness = $row["fluffiness"];
            $type = $row["type"];

            if ($type === ConstantsPetShop::PET_TYPE_CAT) {
                $this->petsArray[] = new Cat($name, $price, $color, $fluffiness, $type);
            } elseif ($type === ConstantsPetShop::PET_TYPE_DOG) {
                $this->petsArray[] = new Dog($name, $price, $color, $fluffiness, $type);
            } elseif ($type === ConstantsPetShop::PET_TYPE_HAMSTER) {
                $this->petsArray[] = new Dog($name, $price, $color, $fluffiness, $type);
            }
        }
    }

    public function getAllPets()
    {
        return $this->petsArray;
    }

    public function getCats()
    {
        $catsArray = [];

        foreach ($this->getAllPets() as $pet) {
            if ($pet->type === ConstantsPetShop::PET_TYPE_CAT) {
                $catsArray[] = $pet;
            }
        }

        return $catsArray;
    }

    public function getWhiteOrFluffy()
    {
        $whiteOrFluffyArray = [];

        foreach($this->getAllPets()as $pet) {
            if ($pet->color === ConstantsPetShop::PET_COLOR_WHITE || $pet->fluffiness > ConstantsPetShop::MIN_FLUFFY_LEVEL) {
                $whiteOrFluffyArray[] = $pet;
            }
        }

        return $whiteOrFluffyArray;
    }

    private function averagePrice()
    {
        $price = [];

        foreach ($this->getAllPets() as $pet) {
            $price[] = $pet->getPrice();
        }

        $averagePrice = array_sum($price) / count($price);

        return $averagePrice;
    }

    public function getExpensive()
    {
        $expensivePets = [];

        foreach ($this->getAllPets() as $pet) {
            if ($pet->getPrice() > $this->averagePrice()) {
                $expensivePets[] = $pet;
            }
        }

        return $expensivePets;
    }
}
