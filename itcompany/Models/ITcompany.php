<?php

require_once "Team.php";
require_once "Candidate.php";
require_once "Team.php";
require_once "HRteam.php";

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

    public function hire()
    {
        $hrTeam = new HRteam();
        $allCandidates = $this->candidates;
        foreach ($this->teams as $team) {
            $teamNeeds = $team->getNeeds();
            foreach ($teamNeeds as $need) {
                $recruter = $hrTeam->recruters[$need];
                $recruter->getSpecialist($allCandidates, $need);
                unset($teamNeeds[$need]);
            }
        }
    }

    public function getFun()
    {
        foreach ($this->teams as $team) {
            return $team->teamName . $team->doJob();
        }
    }
}
