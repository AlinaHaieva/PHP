<?php

require_once "HardSpecialist.php";

class Dev extends HardSpecialist
{
    public function __construct($name, $salary, $position, $team)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->team = $team;
    }

    public function doITWork()
    {
        return "is developing";
    }
}
