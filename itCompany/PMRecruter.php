<?php

require_once "AbstractRecruter.php";

class PMRecruter extends AbstractRecruter
{

    public function getSpecialist(HardSpecialist $candidate, $team)
    {
        $newPM = new PM($candidate->name, $candidate->wantedSalary, $candidate->cv, $team->teamName);
        return $newPM;
    }

}