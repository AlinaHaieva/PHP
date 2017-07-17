<?php

class HRteam
{
    public $pmRecruter;
    public $devRecruter;
    public $qcRecruter;

    public function canFindSpecialist($position)
    {
        $candidatesAll = new ITCompany();
        foreach ($candidatesAll->candidates as $newcomer) {
            if ($newcomer->cv === $position) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getSpecialist($position)
    {
        $candidatesAll = new ITCompany();
        foreach ($candidatesAll->candidates as $newcomer) {
            if ($newcomer->cv === $position) {
                unset($candidatesAll->candidates[$newcomer]);
                if ($position === "DEV") {
                    $devRecruter = new DevRecruter();
                    $devRecruter->getSpecialist($newcomer);
                } elseif ($position === "QC") {
                    $qcRecruter = new QCRecruter();
                    $qcRecruter->getSpecialist($newcomer);
                } else {
                    $pmRecruter = new PMRecruter();
                    $pmRecruter->getSpecialist($newcomer);
                }
            }
        }
    }
}
