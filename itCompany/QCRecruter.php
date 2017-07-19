<?php

require_once "AbstractRecruter.php";

class QCRecruter extends AbstractRecruter
{
    public function getSpecialist(HardSpecialist $newcomer)
    {
//        $lookingForTeam = new Team();
//        $teamForQCCandidate = $lookingForTeam->addTeamMember($newcomer);

        $newQC = new QC($newcomer->name, $newcomer->wantedSalary, $newcomer->cv, $teamForQCCandidate);
        return $newQC;
    }
}