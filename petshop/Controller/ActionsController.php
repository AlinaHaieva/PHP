<?php
require_once("./Models/PetShop.php");

class ActionsController
{
    public function actionCats()
    {
        $model = new Petshop();
        $allCats = $model->getCats();

        require_once("./views/allCats.php");
    }

    public function actionWhiteFluffy()
    {
        $model = new Petshop();
        $whiteOrFluffy = $model->getWhiteOrFluffy();

        require_once("./views/whiteOrFluffy.php");
    }

    public function  actionExpensive()
    {
        $model = new Petshop();
        $expensivePets = $model->getExpensive();

        require_once("./views/expensivePets.php");
    }
}
