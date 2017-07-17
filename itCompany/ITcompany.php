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
        foreach ($teamNeedsArr as $need) {
            if ($HR->canFindSpecialist($need)) {
                $tm = $HR->getSpecialist($need);
                $team->addTeamMember($tm);
            }
        }
    }

    public function getFun()
    {
        $teamInWork = new Team();
        return $teamInWork->doJob();
    }
}
