<?php

class Team
{
    public $teamName;
    public $teamMembers = ["pm"];
    public $needs = ["pm","dev","dev","qc"];

    public function isComplete()
    {
        if ($this->needs == $this->teamMembers) {
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

    public function addTeamMember(HardSpecialist $newSpecialist)
    {
        if (!$this->isComplete()) {
            $teamMembers = $newSpecialist;
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
