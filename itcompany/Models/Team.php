<?php

require_once "ConstantsIT.php";
require_once "Dev.php";
require_once "QC.php";
require_once "PM.php";

class Team
{
    public $teamName;
    public $project;
    private $teamMembers = [];
    public $needs = [];

    public function __construct($teamName, $project)
    {
        $this->teamName = $teamName;
        $this->project = $project;
    }

    public function getTeamMembers() {
        $dbh = new PDO("mysql:host=localhost;dbname=db_tasks", "root", "");
        $teamMembersQuery = $dbh->query('SELECT * FROM it_teams_members');

        foreach ($teamMembersQuery as $row) {
            $name = $row["name"];
            $salary = $row["salary"];
            $position = $row["position"];
            $team = $row["team"];

            if ($position === ConstantsIT::DEV) {
                $this->teamMembers[] = new Dev($name, $salary, $position, $team);
            } elseif ($position === ConstantsIT::QC) {
                $this->teamMembers[] = new QC($name, $salary, $position, $team);
            } elseif ($position === ConstantsIT::PM) {
                $this->teamMembers[] = new PM($name, $salary, $position, $team);
            }
        }

        return $this->teamMembers;
    }

    public function getTeamNeeds() {
        $teamNeedsQuery = ITcompany::dbTasksConnect()->selectData("it_teams_needs");

        foreach ($teamNeedsQuery as $row) {
            $devNeed = $row["dev_need"];
            $pmNeed = $row["pm_need"];
            $qcNeed = $row["qc_need"];
            $team = $row["id"];

            $this->needs[$team] = [
                ConstantsIT::DEV => $devNeed,
                ConstantsIT::QC => $qcNeed,
                ConstantsIT::PM => $pmNeed
            ];
        }

        return $this->needs;
    }

    public function isComplete()
    {
        //return true if associative array is empty:
        return empty(array_filter($this->getTeamNeeds()));

//Is this syntax better?
//        if (empty(array_filter($this->getTeamNeeds()))) {
//             true;
//        }
//        return false;
    }

    public function addTeamMember($newMember) {
        $this->teamMembers[] = $newMember;

        $this->unsetNeed($newMember->position);
    }

    public function unsetNeed($position) {
        foreach ($this->needs as $need => $neededQuantity){
            if ($need === $position){
                $neededQuantity--;
            }
            $this->needs[$need] = $neededQuantity;
        }
    }

    public function doJob()
    {
        if (!$this->isComplete()){
            return "Team needs members.";
        } else {
            return "Team complete and works hard!";
        }
    }
}
