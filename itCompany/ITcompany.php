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
        foreach ($this->teams as $team) {
            $teamNeeds = $team->getNeeds();
            foreach ($teamNeeds as $need) {
                $hrTeam = new HRteam();
                if ($hrTeam->canFindSpecialist($need)) {
                    $gotWorker = $hrTeam->getSpecialist($need);
                    $team->addTeamMember($gotWorker);
                    unset($teamNeeds[$need]);
                }
            }
        }
    }

    public function getFun()
    {
        foreach ($this->teams as $team) {
            $team->doJob();
        }
    }
}
