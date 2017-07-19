<?php

class Team
{
    public $teamName;
    public $project;
    public $teamMembers = [];
    public $needs = [];

    public function __construct($teamName, $project) // $teamMembers, $needs)
    {
        $this->teamName = $teamName;
        $this->project = $project;
//        $this->teamMembers = [];
//        $this->needs = [];
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
//        if (!$this->isComplete()) {
            $this->teamMembers[] = $newSpecialist;
    }

    public function doJob()
    {
        if (!$this->isComplete()){
            echo "Team needs members.";
        } else {
            echo "Team complete and works hard!";
        }
    }
}
