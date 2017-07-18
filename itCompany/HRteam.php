<?php

require_once "PMRecruter.php";
require_once "QCRecruter.php";
require_once "DevRecruter.php";

class HRteam
{
    public $pmRecruter;
    public $devRecruter;
    public $qcRecruter;
    public $recruters = [];

    public function __construct()
    {
        $this->recruters = ["pm" => new PMRecruter(), "qc" => new QCRecruter(), "dev" => new DevRecruter()];
    }

    public function canFindSpecialist($need)
    {
        $isNeed = array_key_exists($need, $this->recruters);
        return $isNeed;
    }

    public function getSpecialist($need)
    {
        if ($need === "pm") {
            return $this->recruters["pm"];
        } elseif ($need === "pm") {
            return $this->recruters["qc"];
        } else {
            return $this->recruters["dev"];
        }
    }
}