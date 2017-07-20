<?php

require_once "AbstractRecruter.php";

class QCRecruter extends AbstractRecruter
{
    public function getSpecialist(HardSpecialist $candidate, $team)
    {
        $newQC = new QC($candidate->name, $candidate->wantedSalary, $candidate->cv, $team->teamName);
        return $newQC;
    }
}