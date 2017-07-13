<?php

class HRteam
{
    public function getDev()
    {
        $candidatesAll = new ITCompany();
        foreach ($candidatesAll->candidates as $newcomer) {
            if ($newcomer->cv = "DEV") {
                unset ($candidatesAll->candidates[$newcomer]);

                $lookingForTeamForDev = new Team();
                $teamForDev = $lookingForTeamForDev->addTeamMember($newcomer);

                $newDev = new Dev($newcomer->name, $newcomer->wantedSalary, $newcomer->cv, $teamForDev);
                return $newDev;
            }
        }
    }

    public function getQc()
    {
        $candidatesAll = new ITCompany();
        foreach ($candidatesAll->candidates as $newcomer) {
            if($newcomer->cv = "QC") {
                unset ($candidatesAll->candidates[$newcomer]);

                $lookingForTeamForQc = new Team();
                $teamForQc = $lookingForTeamForQc->addTeamMember($newcomer);

                $newQc = new QC($newcomer->name, $newcomer->wantedSalary, $newcomer->cv, $teamForQc);
                return $newQc;
            }
        }
    }

    public function getPm()
    {
        $candidatesAll = new ITCompany();
        foreach ($candidatesAll->candidates as $newcomer) {
            if($newcomer->cv = "PM") {
                unset ($candidatesAll->candidates[$newcomer]);

                $lookingForTeamForPm = new Team();
                $teamForPm = $lookingForTeamForPm->addTeamMember($newcomer);

                $newPM = new PM($newcomer->name, $newcomer->wantedSalary, $newcomer->cv, $teamForPm);
                return $newPM;
            }
        }
    }
}
