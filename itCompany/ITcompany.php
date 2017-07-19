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
        foreach ($this->teams as $team) {
            $teamNeeds = $team->getNeeds();
            foreach ($teamNeeds as $need) {
                if ($hrTeam->canFindSpecialist($need)) {
//                    $rightHR = $hrTeam->getSpecialist($need);
////                    $rightHR->addTeamMember();
                    unset($teamNeeds[$need]);
                }
            }
        }
    }

    public function getFun()
    {
        foreach ($this->teams as $team) {
            echo $team->teamName;
            $team->doJob();
            echo "<br>";
        }
    }
}
