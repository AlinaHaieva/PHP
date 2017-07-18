<?php

class Team
{
    public $teamName;
    public $project;
    public $teamMembers = [];
    public $needs = [];

    public function __construct($teamName, $project, $teamMembers, $needs)
    {
        $this->teamName = $teamName;
        $this->project = $project;
        $this->teamMembers = ["dev"];
        $this->needs = ["pm", "qc", "dev", "dev"];
    }

    public function isComplete()
    {
        if ($this->needs === $this->teamMembers) {
            return true;
        }
        return false;
    }

    public function getNeeds()
    {
        if (!$this->isComplete()){
            return $this->needs;
        } else {
            return "Now it is enough workers in our team";
        }
    }

    public function addTeamMember($newSpecialist)
    {
        if (!$this->isComplete()) {
            $teamMembers[] = $newSpecialist;
            return $teamMembers;
        } else {
            return "Now it is enough workers in our team";
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
