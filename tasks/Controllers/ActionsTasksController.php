<?php

require "Models/PetshopModels/PetShop.php";
require "Models/ITcompanyModels/ITcompany.php";
require "View.php";

class ActionsTasksController
{
    private $view;
    private $modelPetshop;
    private $modelITcompany;

    public function __construct()
    {
        $this->view = new View();
        $this->modelPetshop = new Petshop();
        $this->modelITcompany = new ITcompany();
    }

    public function actionMainPage()
    {
        $this->view->render("Views/mainPage.php");
    }

    public function actionCats()
    {
        $allCats = $this->modelPetshop->getCats();

        $this->view->render("Views/petshopAllCats.php", ["allCats"=>$allCats]);
    }

    public function actionWhiteFluffy()
    {
        $whiteOrFluffy = $this->modelPetshop->getWhiteOrFluffy();

        $this->view->render("./Views/petshopWhiteOrFluffy.php", ['whiteOrFluffy'=>$whiteOrFluffy]);
    }

    public function  actionExpensive()
    {
        $expensivePets = $this->modelPetshop->getExpensive();

        $this->view->render("./Views/petshopExpensivePets.php", ['expensivePets'=>$expensivePets]);
    }

    public function actionBefore()
    {
        $candidates = $this->modelITcompany->getCandidates();

        $this->view->render("./Views/ITbefore.php", ['candidates'=>$candidates]);
    }

    public function actionAfter()
    {
        $this->modelITcompany->hire();
        $teams = $this->modelITcompany->getTeams();

        $this->view->render("./Views/ITafter.php", ['teams'=>$teams]);
    }
}