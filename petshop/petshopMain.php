<?php
    require_once 'PetShop.php';
    require_once 'Pet.php';
    require_once 'Cat.php';
    require_once 'Dog.php';
    require_once 'Hamster.php';

    $file = 'db.txt';
    $current = file_put_contents('db.txt', '');
    $current = file_get_contents($file);

    if (isset($_POST['allCats'])) {
        $allCats = $catsList->getCatsArray();;
        $current .= $allCats;
        file_put_contents($file, $current);
        echo $catsList->getCatsArray();;
    }

    if (isset($_POST['expensivePets'])) {
       $expensivePets = $expensivePetsList->getExpensive(50);
       $current .= $expensivePets;
       file_put_contents($file, $current);
       echo $expensivePetsList->getExpensive(50);
    }

    if (isset($_POST['whiteOrFluffyPets'])) {
        $whiteOrFluffyPets = $whiteOrFluffyList->getWhiteOrFluffy();;
        $current .= $whiteOrFluffyPets;
        file_put_contents($file, $current);
        echo $whiteOrFluffyList->getWhiteOrFluffy();;
    }


//  Creating new pets
    $firstCat = new Cat("40", "white", "FirstCat", "cat");
    $secondCat = new Cat("50", "white", "SecondtCat", "cat");
    $thirdCat = new Cat("100", "white", "ThirdCat", "cat");

    $firstDog = new Dog("40", "white", "FirstDog", "dog");
    $secondDog = new Dog("50", "white", "SecondDog", "dog");
    $thirdDog = new Dog("100", "white", "ThirdtDog", "dog");

    $firstHamster = new Hamster("40", "white", "hamster");
    $secondHamster = new Hamster("50", "white", "hamster");
    $thirdHamster = new Hamster("100", "white", "hamster");

//  Adding created pets to array
    $petsArray = new Petshop();
    $petsArray->addPet($firstCat);
    $petsArray->addPet($secondCat);
    $petsArray->addPet($thirdCat);
    $petsArray->addPet($firstDog);
    $petsArray->addPet($secondDog);
    $petsArray->addPet($thirdDog);
    $petsArray->addPet($firstHamster);
    $petsArray->addPet($secondHamster);
    $petsArray->addPet($thirdHamster);

//  Creating pets lists
    $catsList = new Petshop();
    $catsList->getCatsArray();

    $expensivePetsList = new Petshop();
    $expensivePetsList->getExpensive(50);

    $whiteOrFluffyList = new Petshop();
    $whiteOrFluffyList->getWhiteOrFluffy();
?>
