<?php

    require_once "ITcompany.php";
    require_once "ProfileEnum.php";

// Creating candidates
    $dev1Candidate = new Candidate('Ann', 1500, 'Dev');
    $dev2Candidate = new Candidate('Brittani', 1200, 'Dev');
    $pm1Candidate = new Candidate('Celine', 1500, 'PM');
    $pm2Candidate = new Candidate('Dana', 2000, 'PM');
    $qc1Candidate = new Candidate('Elizabeth', 700, 'QC');
    $qc2Candidate = new Candidate('Flora',  1500, 'QC');

// Adding candidates into array
    $company = new ITcompany();
    $company->addCandidate($dev1Candidate);
    $company->addCandidate($dev2Candidate);
    $company->addCandidate($pm1Candidate);
    $company->addCandidate($pm1Candidate);
    $company->addCandidate($pm2Candidate);
    $company->addCandidate($qc1Candidate);
    $company->addCandidate($qc2Candidate);

echo "List of candidates: <br>";
print_r($company->candidates);
echo "<hr>";

// Creating teams and adding into array
    $firstTeam = new Team("First", "Project1");
    $secondTeam = new Team("Second", "Project2");
    $company->addTeam($firstTeam);
    $company->addTeam($secondTeam);

echo "List of added empty teams: <br>";
print_r($company->teams);
echo "<hr>";

//Adding need and existed members to teams
    $firstTeam->addNeeds(ProfileEnum::DEV);
    $firstTeam->addNeeds(ProfileEnum::PM);
    $firstTeam->addNeeds(ProfileEnum::QC);
    $firstTeam->addNeeds(ProfileEnum::DEV);
    $firstTeam->addNeeds(ProfileEnum::DEV);
    $firstTeam->addNeeds(ProfileEnum::DEV);

    $firstTeam->addTeamMember(ProfileEnum::PM);
    $firstTeam->addTeamMember(ProfileEnum::DEV);

    $secondTeam->addNeeds(ProfileEnum::DEV);
    $secondTeam->addNeeds(ProfileEnum::QC);
    $secondTeam->addNeeds(ProfileEnum::DEV);
    $secondTeam->addNeeds(ProfileEnum::QC);
    $secondTeam->addNeeds(ProfileEnum::DEV);
    $secondTeam->addNeeds(ProfileEnum::PM);

    $secondTeam->addTeamMember(ProfileEnum::QC);
    $secondTeam->addTeamMember(ProfileEnum::DEV);


echo "List of team's needs: <br>";
print_r($firstTeam->getNeeds());
echo "<br>";
print_r($secondTeam->getNeeds());
echo "<hr>";

echo "List of teams before process: <br>";
print_r($company->teams);
echo "<hr>";

//Calling the functions
$company->hire();
$company->getFun();
echo "<hr>";

echo "List of teams that should changes after process: <br>";
print_r($company->teams);
echo "<hr>";

echo "List of team's needs that should changes to empty: <br>";
print_r($firstTeam->getNeeds());
echo "<br>";
print_r($secondTeam->getNeeds());
echo "<hr>";

echo "List of candidates that should changes to empty: <br>";
print_r($company->candidates);
echo "<hr>";

