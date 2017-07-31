<?php

abstract class AbstractRecruter
{
    abstract function createSpecialist($candidate, $team);

    public function isMatch($candidate, $needSpecialist)
    {
        return ($candidate->cv === $needSpecialist);
    }

    public function getSpecialist($allCandidates, $needSpecialist, $team)
    {
        foreach ($allCandidates as $candidate) {
            if ($this->isMatch($candidate, $needSpecialist)) {
                $this->createSpecialist($candidate, $team);
            }
        }
    }
}
