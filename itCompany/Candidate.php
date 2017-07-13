<?php

class Candidate extends Person
{
    public $cv;
    public $wantedSalary;

    public function __construct($name, $wantedSalary, $cv)
    {
        $this->name = $name;
        $this->wantedSalary = $wantedSalary;
        $this->cv = $cv;
    }
}
