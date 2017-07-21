<?php

require_once "PMRecruter.php";
require_once "QCRecruter.php";
require_once "DevRecruter.php";

class HRteam
{
    public $recruters = [];

    public function __construct()
    {
        $this->recruters = [
            ProfileEnum::PM => new PMRecruter(),
            ProfileEnum::QC => new QCRecruter(),
            ProfileEnum::DEV => new DevRecruter()
        ];
    }
}