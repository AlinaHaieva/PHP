<?php

class ITcompany
{
    public $candidates = [];
    public $teams = [];

    public function addCandidate(Candidate $candidate)
    {
        $this->candidates[] = $candidate;
    }

    public function addTeam(Team $team)
    {
        $this->teams[] = $team;
    }

    public function getTeams()
    {
        $teamNeedsArr = [];
        foreach ($this->teams as $receivedTeam) {
            $teamNeedsArr[$receivedTeam] = $receivedTeam->getNeeds();
        }
        return $teamNeedsArr;
    }

    public function hire($candidate, $teamNeedsArr)
    {
        $profile = $candidate->cv;
        foreach ($teamNeedsArr as $need) {
            $hiringHardSpecialists = new HRteam();
            if ($need === "DEV" && $profile === $need) {
                $hiringHardSpecialists->getDev();
            } elseif ($need === "QC" && $profile === $need) {
                $hiringHardSpecialists->getQC();
            } elseif ($need === "PM" && $profile === $need) {
                $hiringHardSpecialists->getPM();
            }
        }
    }

    public function getFun()
    {
        $teamInWork = new Team();
        return $teamInWork->doJob();
    }
}
