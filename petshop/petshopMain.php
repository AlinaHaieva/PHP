<?php
    require_once 'PetShop.php';
    require_once 'Pet.php';
    require_once 'Cat.php';
    require_once 'Dog.php';
    require_once 'Hamster.php';

//  Creating new pets
    $firstCat = new Cat("40", "white", "FirstCat", 1, "cat");
    $secondCat = new Cat("50", "white", "SecondCat", 10, "cat");
    $thirdCat = new Cat("100", "white", "ThirdCat", 7, "cat");

    $firstDog = new Dog("40", "white", "FirstDog", "dog");
    $secondDog = new Dog("50", "white", "SecondDog", "dog");
    $thirdDog = new Dog("100", "white", "ThirdDog", "dog");

    $firstHamster = new Hamster("40", "white", 5, "hamster");
    $secondHamster = new Hamster("50", "white", 8, "hamster");
    $thirdHamster = new Hamster("100", "white", 9, "hamster");

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
    $petsArray->getCats();

    $petsArray->getExpensive(50);

    $petsArray->getWhiteOrFluffy();

    $file = 'db.txt';
    $current = file_put_contents('db.txt', '');
    $current = file_get_contents($file);

    if (isset($_POST['allCats'])) {
        $allCats = $petsArray->getCats();
        $current .= $allCats;
        file_put_contents($file, $current);
        echo $petsArray->getCats();
    }

    if (isset($_POST['expensivePets'])) {
        $expensivePets = $petsArray->getExpensive(50);
        $current .= $expensivePets;
        file_put_contents($file, $current);
        echo $petsArray->getExpensive(50);
    }

    if (isset($_POST['whiteOrFluffyPets'])) {
        $whiteOrFluffyPets = $petsArray->getWhiteOrFluffy();
        $current .= $whiteOrFluffyPets;
        file_put_contents($file, $current);
        echo $petsArray->getWhiteOrFluffy();
    }
?>
