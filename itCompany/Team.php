<?php

class Team
{
    public $teamName;
    public $project;
    public $teamMembers = [];
    public $needs = [];

    public function __construct($teamName, $project)
    {
        $this->teamName = $teamName;
        $this->project = $project;
    }

    public function isComplete()
    {
        if (sort($this->needs) === sort($this->teamMembers)) {
            return true;
        }
        return false;
    }

    public function addNeeds($need)
    {
        $this->needs[] = $need;
    }

    public function getNeeds()
    {
        if ($this->isComplete()){
            return $this->needs;
        } else {
//            throw new Exception("Now it is enough workers in our team");
            return [];
        }
    }

    public function addTeamMember($newSpecialist)
    {
        if ($this->isComplete()) {
            $this->teamMembers[] = $newSpecialist;
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
