<?php

require_once "Team.php";
require_once "specialists/Candidate.php";
require_once "HRteam.php";

class ITcompany
{
    private $candidates = [];
    private $teams = [];

    public function getCandidatesObjectsArray() {
        foreach (TasksDatabase::getAllCandidatesFromDB() as $row) {
            $name = $row["name"];
            $wantedSalary = $row["wanted_salary"];
            $cv = $row["cv"];

            $this->candidates[] = new Candidate($name, $wantedSalary, $cv);
        }
    }

    public function getCandidates()
    {
        return $this->candidates;
    }

    public function getTeamsObjectsArray() {
        foreach (TasksDatabase::getAllTeamsFromDB() as $row) {
            $teamName = $row["name"];
            $project = $row["project"];

            $this->teams[] = new Team($teamName, $project);
        }
    }

    public function getTeams()
    {
        return $this->teams;
    }

    public function gettingEachTeamNeeds() {
        $needs = [];

        foreach ($this->teams as $team) {
            if (!$team->isComplete()) {
                $needs[] = $team->getTeamNeeds();
            }
        }

        return $needs;
    }

    public function hire()
    {
        $hrTeam = new HRteam();
        $allCandidates = $this->candidates;

        foreach ($this->gettingEachTeamNeeds() as $needSpecialist => $neededQuantity) {
            for ($i = 0; $i < $neededQuantity; $i++) {
                $recruter = $hrTeam->chooseRecruter($needSpecialist);
                $recruter->getSpecialist($allCandidates, $needSpecialist, $team);
            }
        }
    }

    public function getFun()
    {
        $teamInWork = [];
        foreach ($this->teams as $team) {
            $teamInWork[] = $team->teamName . $team->doJob();
        }
        return $teamInWork;
    }
}
