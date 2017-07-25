<?php require_once("header.php")?>
    <h3>White or fluffy pets:</h3>
<p>
    <?php
        foreach ($whiteOrFluffy as $pet) {
            $eachPet = $pet->name . " costs: " . $pet->price . ", color: " . $pet->color . ", fluffiness equal "
                         . $pet->fluffiness . "<br>";
            echo $eachPet;
        }
    ?>
</p>
<?php require_once("footer.php")?>
