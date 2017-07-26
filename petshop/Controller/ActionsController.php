<?php
require("./Models/PetShop.php");

class ActionsController
{
    public function actionCats()
    {
        $model = new Petshop();
        $allCats = $model->getCats();

        require("./views/allCats.php");
    }

    public function actionWhiteFluffy()
    {
        $model = new Petshop();
        $whiteOrFluffy = $model->getWhiteOrFluffy();

        require("./views/whiteOrFluffy.php");
    }

    public function  actionExpensive()
    {
        $model = new Petshop();
        $expensivePets = $model->getExpensive();

        require("./views/expensivePets.php");
    }
}
