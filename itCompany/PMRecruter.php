<?php

require_once "AbstractRecruter.php";

class PMRecruter extends AbstractRecruter
{
    public function getSpecialist(HardSpecialist $specialist)
    {
//        $lookingForTeam = new Team();
//        $teamForPMCandidate = $lookingForTeam->addTeamMember($newcomer);

        $newPM = new PM($newcomer->name, $newcomer->wantedSalary, $newcomer->cv, $teamForPMCandidate);
        return $newPM;
    }
}