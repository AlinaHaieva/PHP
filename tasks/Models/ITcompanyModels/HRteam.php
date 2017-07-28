<?php

require_once "PMRecruter.php";
require_once "QCRecruter.php";
require_once "DevRecruter.php";
require_once "ConstantsIT.php";

class HRteam
{
    private $recruters = [];

    public function __construct()
    {
        $this->recruters = [
            ConstantsIT::DEV => new DevRecruter(),
            ConstantsIT::QC => new QCRecruter(),
            ConstantsIT::PM => new PMRecruter()
        ];
    }

    public function chooseRecruter($needSpecialist) {
        if ($needSpecialist === ConstantsIT::DEV) {
            return $this->recruters[ConstantsIT::DEV];
        } elseif ($needSpecialist === ConstantsIT::QC) {
            return $this->recruters[ConstantsIT::DEV];
        } elseif ($needSpecialist === ConstantsIT::PM) {
            return $this->recruters[ConstantsIT::PM];
        }
    }
}
