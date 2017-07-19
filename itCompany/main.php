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

//print_r($company->candidates);

// Creating teams and adding into array
$firstTeam = new Team("First", "Project1");
$secondTeam = new Team("Second", "Project2");

$firstTeam->addNeeds(ProfileEnum::DEV);
$firstTeam->addNeeds(ProfileEnum::PM);
$firstTeam->addNeeds(ProfileEnum::QC);
$firstTeam->addNeeds(ProfileEnum::DEV);
$firstTeam->addNeeds(ProfileEnum::DEV);
$firstTeam->addNeeds(ProfileEnum::DEV);

$secondTeam->addNeeds(ProfileEnum::DEV);
$secondTeam->addNeeds(ProfileEnum::QC);
$secondTeam->addNeeds(ProfileEnum::DEV);
$secondTeam->addNeeds(ProfileEnum::QC);
$secondTeam->addNeeds(ProfileEnum::DEV);
$secondTeam->addNeeds(ProfileEnum::PM);

$firstTeam->addTeamMember(ProfileEnum::PM);
$firstTeam->addTeamMember(ProfileEnum::DEV);

$secondTeam->addTeamMember(ProfileEnum::QC);
$secondTeam->addTeamMember(ProfileEnum::DEV);

print_r($firstTeam->getNeeds());

echo "<br>";

print_r($secondTeam->getNeeds());

echo "<hr>";

$company->addTeam($firstTeam);
$company->addTeam($secondTeam);



print_r($company->teams);

$company->hire();

echo "<hr>";

$company->getFun();

echo "<hr>";

print_r($company->teams);

