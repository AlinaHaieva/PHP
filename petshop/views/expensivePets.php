<?php require_once("header.php")?>
<p>Expensive pets:
    <?php
        foreach ($expensivePets as $pet) {
            $eachPet = $this->name . " costs: " . $this->price . ", color: " . $this->color . ", fluffiness equal "
                     . $this->fluffiness . "\n";
            echo $eachPet;
        }
    ?>
<p>
<?php require_once("footer.php")?>
