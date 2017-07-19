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
        $this->recruters = [ProfileEnum::PM => new PMRecruter(), ProfileEnum::QC => new QCRecruter(), ProfileEnum::DEV => new DevRecruter()];
    }

    public function canFindSpecialist($need)
    {
        if (array_key_exists($need, $this->recruters)) {
            return true;
        } else {
            return false;
        }
    }

    public function getSpecialist($need)
    {
        if ($need === ProfileEnum::QC) {
            return $this->recruters[$need]->getSpecialist();
        } elseif ($need === ProfileEnum::DEV) {
            return $this->recruters[$need]->getSpecialist();
        } else {
            return $this->recruters[$need]->getSpecialist();
        }
    }
}