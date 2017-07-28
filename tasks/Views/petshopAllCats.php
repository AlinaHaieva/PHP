<?php require("petshopHeader.php") ?>
<h3>All cats:</h3>
<?php foreach ($allCats as $cat): ?>
    <p>
    Name: <?= $cat->name; ?>.<br>
    Costs: <?= $cat->price; ?>.<br>
    Color: <?= $cat->color; ?>.<br>
    Fluffiness level equal: <?= $cat->fluffiness; ?>.<br>
    </p>
<?php endforeach; ?>

<?php require("footer.php")?>
