<?php require("header.php")?>
<div class="left">
    <h3>The list of candidates before hiring:</h3>

    <?php foreach ($candidates as $candidate): ?>
        <p>
            Name: <?= $candidate->name; ?>.<br>
            She is <?= $candidate->cv; ?> specialist.<br>
            She wants such a salary: <?= $candidate->wantedSalary; ?>.<br>
        </p>
    <?php endforeach; ?>

</div>

<a href="./index.php?action=actionAfter" class="link">List of teams after hiring</a>

<?php require("footer.php")?>
