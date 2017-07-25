<?php

require_once "AbstractRecruter.php";

class QCRecruter extends AbstractRecruter
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
        $newQC = new QC($candidate->name, $candidate->wantedSalary, $candidate->cv, $team->teamName);
        return $newQC;
    }
}