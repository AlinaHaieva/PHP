<?php

abstract class AbstractRecruter
{
    abstract function createSpecialist($candidate, $team);

    public function isMatch($candidate, $neededSpecialist)
    {
        return ($candidate->cv === $neededSpecialist);
    }

    public function getSpecialist($allCandidates, $neededSpecialist, $team)
    {
        foreach ($allCandidates as $candidate) {
            if ($this->isMatch($candidate, $neededSpecialist)) {
                $newSpecialist = $this->createSpecialist($candidate, $team);
                $team->addTeamMember($newSpecialist);
            }
        }
    }
}
