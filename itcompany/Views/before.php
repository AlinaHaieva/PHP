<?php require_once("header.php")?>
<div class="left">
    <h3>Before:</h3>
    <p>
        Список кандидатов

    <?php
        foreach ($candidates as $candidate) {
            $eachCandidate = $candidate->name . " is " . $candidate->cv . " specialist, wants salary: "
                           . $candidate->wantedSalary . "<br>";
            echo $eachCandidate;
        }
    ?>
    </p>
</div>
<?php require_once("after.php")?>