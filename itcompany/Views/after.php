<?php require("header.php")?>
<div class="right">
    <h3>The list of teams after hiring:</h3>

    <?php foreach ($teams as $team): ?>
        <p>
            Team name: <?= $team->teamName ?>.<br>
            Team project is <?= $team->project; ?>.<br>
            Team members are:
                <?php foreach ($team->getTeamMembers() as $member):?>
                    <p>
                    Her name is <?php print_r($member->name);?><br>
                    She earns <?php print_r($member->salary);?><br>
                    Her position is <?php print_r($member->position);?>
                    </p>
                <?php endforeach; ?>
        </p>
    <?php endforeach; ?>

</div>
<?php require("footer.php")?>