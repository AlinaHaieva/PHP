<?php

require_once "PMRecruter.php";
require_once "QCRecruter.php";
require_once "DevRecruter.php";
require_once "ConstantsIT.php";

class HRteam
{
    public $recruters = [];

    public function __construct()
    {
        $this->recruters = [
            ConstantsIT::DEV => new DevRecruter(),
            ConstantsIT::QC => new QCRecruter(),
            ConstantsIT::PM => new PMRecruter()
        ];
    }
}
