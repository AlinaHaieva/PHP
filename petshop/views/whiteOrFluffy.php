<?php require("header.php")?>
<h3>White or fluffy pets:</h3>

<?php foreach ($whiteOrFluffy as $pet): ?>
    <p>
        Name: <?= $pet->name; ?>.<br>
        Costs: <?= $pet->price; ?>.<br>
        Color: <?= $pet->color; ?>.<br>
        Fluffiness level equal: <?= $pet->fluffiness; ?>.<br>
    </p>
<?php endforeach; ?>

<?php require("footer.php")?>
