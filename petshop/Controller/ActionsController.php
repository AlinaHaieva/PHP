<?php
require_once("../Models/PetShop.php");

class ActionsController
{
    public function actionCats()
    {
        $model = new Petshop();
        $model->getCats();

        require_once("../views/allCats.php");
    }

    public function actionFluffy()
    {
        $model = new Petshop();
        $model->getWhiteOrFluffy();

        require_once("../views/expensivePets.php");
    }

    public function  actionExpensive()
    {
        $model = new Petshop();
        $model->getExpensive();

        require_once("../views/whiteOrFluffy.php");
    }
}
