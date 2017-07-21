<?php

require_once "AbstractRecruter.php";

class DevRecruter extends AbstractRecruter
{
    public function isMatch($candidate, $need)
    {
        if ($candidate->cv === $need) {
            return true;
        }
        return false;
    }

    public function createSpecialist($candidate)
    {
        $newDev = new Dev($candidate->name, $candidate->wantedSalary, $candidate->cv, $team->teamName);
        return $newDev;
    }
}