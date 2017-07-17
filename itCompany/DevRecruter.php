<?php

require_once "AbstractRecruter.php";

class DevRecruter extends AbstractRecruter
{
    public function getSpecialist(HardSpecialist $specialist)
    {
        $lookingForTeam = new Team();
        $teamForDevCandidate = $lookingForTeam->addTeamMember($newcomer);

        $newDev = new Dev($newcomer->name, $newcomer->wantedSalary, $newcomer->cv, $teamForDevCandidate);
        return $newDev;
    }
}