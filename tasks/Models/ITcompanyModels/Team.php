<?php

require_once "specialists/ConstantsIT.php";
require_once "specialists/Dev.php";
require_once "specialists/QC.php";
require_once "specialists/PM.php";

class Team
{
    public $teamName;
    public $project;
    private $teamMembers = [];
    private $needs = [];

    public function __construct($teamName, $project)
    {
        $this->teamName = $teamName;
        $this->project = $project;
    }

    public function getTeamMembersObjectsArray() {
        foreach (tasksDatabase::getAllTeamsMembersFromDB() as $row) {
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
    }

    public function getTeamsMembers()
    {
        return $this->teamMembers;
    }

    public function getTeamNeedsObjectsArray() {
        foreach (tasksDatabase::getAllTeamsNeedsFromDB() as $row) {
            $devNeed = $row["dev_need"];
            $pmNeed = $row["pm_need"];
            $qcNeed = $row["qc_need"];

            $this->needs = [
                ConstantsIT::DEV => $devNeed,
                ConstantsIT::QC => $qcNeed,
                ConstantsIT::PM => $pmNeed
            ];
        }
    }

    public function getTeamNeeds()
    {
        return $this->needs;
    }

    public function isComplete()
    {
        $checkArrayContent = array_filter($this->needs);

        //return true if associative array is empty:
        return empty($checkArrayContent);
    }

    public function addTeamMember($newMember) {
        $this->teamMembers[] = $newMember;
        $this->unsetNeed($newMember->position);

        return $newMember;
    }

    public function unsetNeed($position) {
        foreach ($this->needs as $need => $neededQuantity){
            if ($need === $position){
                $neededQuantity--;
                $this->needs[$need] = $neededQuantity;
            }
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
