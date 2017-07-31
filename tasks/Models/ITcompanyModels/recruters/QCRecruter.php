<?php

require_once "AbstractRecruter.php";

class QCRecruter extends AbstractRecruter
{
    public function createSpecialist($candidate, $team)
    {
        $newQC = new QC($candidate->name, $candidate->wantedSalary, $candidate->cv, $team->teamName);

        $team->addTeamMember($newQC);
    }
}
