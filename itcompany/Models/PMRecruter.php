<?php

require_once "AbstractRecruter.php";

class PMRecruter extends AbstractRecruter
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
        $newPM = new PM($candidate->name, $candidate->wantedSalary, $candidate->cv, $team->teamName);
        return $newPM;
    }
}