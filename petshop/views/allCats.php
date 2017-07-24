<?php require_once("header.php")?>
<p>All cats:
    <?php
        foreach ($catsArray as $cat) {
            $eachCat = $this->name . " costs: " . $this->price . ", color: " . $this->color . ", fluffiness equal "
                     . $this->fluffiness . "\n";
            echo $eachCat;
        }
    ?>
<p>
<?php require_once("footer.php")?>
