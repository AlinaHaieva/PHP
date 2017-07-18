<?php

require_once "ITcompany.php";

// Creating candidates
$dev1Candidate = new Candidate('Adam', 1500, 'Dev');
$dev2Candidate = new Candidate('Brian', 1200, 'Dev');
$pm1Candidate = new Candidate('John', 1500, 'PM');
$pm2Candidate = new Candidate('Kevin', 2000, 'PM');
$qc1Candidate = new Candidate('Andrew', 700, 'QC');
$qc2Candidate = new Candidate('Kate',  1500, 'QC');

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
$firstTeam = new Team("First", "Project1", "dev", "pm", "qc", "dev", "dev");
$secondTeam = new Team("Second", "Project2", "dev", "pm", "qc", "dev", "dev");

$company->addTeam($firstTeam);
$company->addTeam($secondTeam);

//print_r($company->teams);

$company->hire();
$company->getFun();