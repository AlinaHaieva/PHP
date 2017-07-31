<?php

require_once "recruters/PMRecruter.php";
require_once "recruters/QCRecruter.php";
require_once "recruters/DevRecruter.php";
require_once "specialists/ConstantsIT.php";

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
