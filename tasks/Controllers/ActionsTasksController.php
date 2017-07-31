<?php

require "Models/PetshopModels/PetShop.php";
require "Models/ITcompanyModels/ITcompany.php";
require "View.php";

class ActionsTasksController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function actionMainPage()
    {
        $this->view->render("Views/mainPage.php");
    }

    public function actionCats()
    {
        $modelPetshop = new Petshop();
        $modelPetshop->createPetsObjectsArray();

        $allCats = $modelPetshop->getCats();

        $this->view->render("Views/petshopAllCats.php", ["allCats"=>$allCats]);
    }

    public function actionWhiteFluffy()
    {
        $modelPetshop = new Petshop();
        $modelPetshop->createPetsObjectsArray();

        $whiteOrFluffy = $modelPetshop->getWhiteOrFluffy();

        $this->view->render("./Views/petshopWhiteOrFluffy.php", ['whiteOrFluffy'=>$whiteOrFluffy]);
    }

    public function  actionExpensive()
    {
        $modelPetshop = new Petshop();
        $modelPetshop->createPetsObjectsArray();

        $expensivePets = $modelPetshop->getExpensive();

        $this->view->render("./Views/petshopExpensivePets.php", ['expensivePets'=>$expensivePets]);
    }

    public function actionBefore()
    {
        $modelITcompany = new ITcompany();
        $modelITcompany->getCandidatesObjectsArray();

        $candidates = $modelITcompany->getCandidates();

        $this->view->render("./Views/ITbefore.php", ['candidates'=>$candidates]);
    }

    public function actionAfter()
    {
        $modelITcompany = new ITcompany();
        $modelITcompany->getTeamsObjectsArray();

        $modelITcompany->hire();
        $teams = $modelITcompany->getTeams();

        $this->view->render("./Views/ITafter.php", ['teams'=>$teams]);
    }
}