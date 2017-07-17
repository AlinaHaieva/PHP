<?php

require_once "Worker.php";

class HR extends Worker
{
    public function __construct($name, $salary, $position, $team)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->team = $team;
    }

    public function hunt()
    {
        return "Interview candidates";
    }
}
