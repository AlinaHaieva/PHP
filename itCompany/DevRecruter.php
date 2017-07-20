<?php

require_once "AbstractRecruter.php";

class DevRecruter extends AbstractRecruter
{
    public function getSpecialist(HardSpecialist $candidate, $team)
    {
        $newDev = new Dev($candidate->name, $candidate->wantedSalary, $candidate->cv, $team->teamName);
        return $newDev;
    }
}