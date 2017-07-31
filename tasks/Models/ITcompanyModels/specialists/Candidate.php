<?php

class Candidate extends Person implements IITWorker
{
    public $cv;
    public $wantedSalary;

    public function __construct($name, $wantedSalary, $cv)
    {
        $this->name = $name;
        $this->wantedSalary = $wantedSalary;
        $this->cv = $cv;
    }

    public function doITWork() {
        return "hoping to get job because can do IT work";
    }
}
