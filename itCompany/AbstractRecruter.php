<?php

abstract class AbstractRecruter
{
    abstract function isMatch($candidate, $need);

    abstract function createSpecialist($candidate);

    public function getSpecialist ($allCandidates, $need)
    {
        foreach ($allCandidates as $candidate) {
            if ($this->isMatch($candidate, $need)) {
                $this->createSpecialist($candidate);
                unset($allCandidates[$candidate]);
            }
        }
    }
}