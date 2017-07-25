<?php require_once("header.php")?>
<h3>All cats:</h3>
<p>
    <?php
        foreach ($allCats as $cat) {
            $eachCat = $cat->name . " costs: " . $cat->price . ", color: " . $cat->color . ", fluffiness equal "
                     . $cat->fluffiness . "<br>";
            echo $eachCat;
        }
    ?>
</p>
<?php require_once("footer.php")?>
