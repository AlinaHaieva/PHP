<?php require("ITheader.php") ?>
<div class="left">
    <h3>The list of candidates before hiring:</h3>

    <?php foreach ($data["candidates"] as $candidate): ?>
        <p>
            Name: <?= $candidate->name; ?>.<br>
            She is <?= $candidate->cv; ?> specialist.<br>
            She wants such a salary: <?= $candidate->wantedSalary; ?>.<br>
        </p>
    <?php endforeach; ?>

</div>
<?php require("footer.php") ?>