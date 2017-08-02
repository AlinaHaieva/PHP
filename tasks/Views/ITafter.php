<?php require("ITheader.php") ?>
<div class="right">
    <h3>The list of teams after hiring:</h3>

    <?php foreach ($data["teams"] as $team): ?>
        <div class="teams">
            <b>Team name:</b> <?= $team->teamName; ?>.<br>
            <b>Team project</b> is <?= $team->project; ?>.<br>

            <b>Team needs:</b>
            <?php foreach ($team->getTeamNeeds() as $need=>$amount): ?>
                <?php echo $need . ': ' . $amount;?>
            <?php endforeach; ?><br>

            <b>Team members</b> are:<br>
        </div>

        <?php foreach ($team->getTeamsMembers() as $member):?>
            <?php if ($team->teamName === $member->team):?>
                <p>
                    Team member name is <?= $member->name; ?>.<br>
                    She earns <?= $member->salary; ?>.<br>
                    Her position is <?= $member->position; ?>.<br>
                    She is a member of <?= $member->team; ?>.
                </p>
            <?php endif;?>
        <?php endforeach; ?>

    <?php endforeach; ?>



</div>
<?php require("footer.php") ?>