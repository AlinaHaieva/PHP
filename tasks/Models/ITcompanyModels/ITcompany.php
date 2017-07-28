<?php

require_once "Team.php";
require_once "Candidate.php";
require_once "Team.php";
require_once "HRteam.php";

class ITcompany
{
    public $candidates = [];
    public $teams = [];

    public function __construct()
    {
        $this->candidates = $this->getCandidates();
    }

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
        $allTeams = $this->getTeams();
        $allCandidates = $this->candidates;

        foreach ($allTeams as $team) {
            $team->getTeamMembers();
            if (!$team->isComplete()) {
                $teamNeeds = $team->getTeamNeeds();
                foreach ($teamNeeds as $needSpecialist => $neededQuantity) {
                    for ($i = 0; $i < $neededQuantity; $i++) {
                        $recruter = $hrTeam->chooseRecruter($needSpecialist);
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
