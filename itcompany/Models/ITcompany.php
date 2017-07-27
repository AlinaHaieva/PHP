<?php

require_once "Team.php";
require_once "Candidate.php";
require_once "Team.php";
require_once "HRteam.php";

class ITcompany
{
    private $candidates = [];
    private $teams = [];

    public function getCandidates() {
        $dbh = new PDO("mysql:host=localhost;dbname=db_tasks", "root", "");
        $candidatesQuery = $dbh->query('SELECT * FROM it_candidates');

        foreach ($candidatesQuery as $row) {
            $name = $row["name"];
            $wantedSalary = $row["wanted_salary"];
            $cv = $row["cv"];

            $this->candidates[] = new Candidate($name, $wantedSalary, $cv);
        }

        return $this->candidates;
    }

    public function getTeams() {
        $dbh = new PDO("mysql:host=localhost;dbname=db_tasks", "root", "");
        $teamsQuery = $dbh->query('SELECT * FROM it_teams');

        foreach ($teamsQuery as $row) {
            $teamName = $row["name"];
            $project = $row["project"];

            $this->teams[] = new Team($teamName, $project);
        }

        return $this->teams;
    }

    public function hire()
    {
        $hrTeam = new HRteam();
        $allCandidates = $this->getCandidates();

        foreach ($this->getTeams() as $team) {
            if (!$team->isComplete()) {
                $teamNeeds = $team->getTeamNeeds();
                foreach ($teamNeeds as $needSpecialist => $neededQuantity) {
                    for ($i = 0; $i < $neededQuantity; $i++) {
                        $recruter = $hrTeam->recruters[$needSpecialist];
                        $recruter->getSpecialist($allCandidates, $needSpecialist, $team);
                    }
                }
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
