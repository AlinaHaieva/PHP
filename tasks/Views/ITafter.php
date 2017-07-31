<?php require("ITheader.php") ?>
<div class="right">
    <h3>The list of teams after hiring:</h3>

    <?php foreach ($data["teams"] as $team): ?>
        <div class="teams">
            <b>Team name:</b> <?= $team->teamName ?>.<br>
            <b>Team project</b> is <?= $team->project; ?>.<br>
            <b>Team members</b> are:
                <?php foreach ($team->getTeamsMembers() as $member):?>
                    <?php if ($team->teamName === $member->team):?>
                    <p>
                        Team member name is <?php print_r($member->name);?>.<br>
                        She earns <?php print_r($member->salary);?>.<br>
                        Her position is <?php print_r($member->position);?>.<br>
                        She is a member of <?php print_r($member->team);?>.
                    </p>
                    <?php else: continue; ?>
                    <?php endif;?>
                <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

</div>
<?php require("footer.php") ?>