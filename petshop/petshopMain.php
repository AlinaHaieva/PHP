<?php
    require_once 'PetShop.php';
    require_once 'Pet.php';
    require_once 'Cat.php';
    require_once 'Dog.php';
    require_once 'Hamster.php';

    $firstCat = new Cat("40", "white", "FirstCat", "cat");
//    echo $firstCat->isYourName("FirstCat");
//    echo $firstCat->isYourName("Lorem");
//    echo $firstCat->isFluffy();
//    echo $firstCat->isYourColor("black");
//    echo $firstCat->isYourColor("white");
    $secondCat = new Cat("50", "white", "SecondtCat", "cat");
    $thirdCat = new Cat("100", "white", "ThirdCat", "cat");

    echo "<br>";

    $firstDog = new Dog("40", "white", "FirstDog", "dog");
//    echo $firstDog->isYourName("FirstDog");
//    echo $firstDog->isYourName("Lorem");
//    echo $firstDog->isFluffy();
//    echo $firstDog->isYourColor("black");
//    echo $firstDog->isYourColor("white");
    $firstDog = new Dog("50", "white", "SecondDog", "dog");
    $firstDog = new Dog("100", "white", "ThirdtDog", "dog");

    echo "<br>";

    $firstHamster = new Hamster("40", "white", "hamster");
//    echo $firstHamster->isYourName("firstCat");
//    echo $firstHamster->isFluffy();
//    echo $firstHamster->isYourColor("black");
//    echo $firstHamster->isYourColor("white");
    $secondHamster = new Hamster("50", "white", "hamster");
    $thirdHamster = new Hamster("100", "white", "hamster");

    $file = 'db.txt';
    $current = file_put_contents('db.txt', '');
    $current = file_get_contents($file);

    if (isset($_POST['allCats'])) {
        $allCats = 1;
        $current .= $allCats;
        file_put_contents($file, $current);
        echo "Список котов";
    }
    if (isset($_POST['expensivePets'])) {
        $expensivePets = 2;
        $current .= $expensivePets;
        file_put_contents($file, $current);
        echo "Список дорогих животных";
    }
    if (isset($_POST['whiteOrFluffyPets'])) {
        $whiteOrFluffyPets = 3;
        $current .= $whiteOrFluffyPets;
        file_put_contents($file, $current);
        echo "Список белых и пушистых";
    }

?>

</body>
</html>
