<?php require("petshopHeader.php") ?>
<h3>Expensive pets:</h3>
<?php foreach ($data["expensivePets"] as $pet): ?>
    <p>
        Name: <?= $pet->name; ?>.<br>
        Costs: <?= $pet->price; ?>.<br>
        Color: <?= $pet->color; ?>.<br>
        Fluffiness level equal: <?= $pet->fluffiness; ?>.<br>
    </p>
<?php endforeach; ?>
<?php require("footer.php")?>
