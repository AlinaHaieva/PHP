<?php
require("./Models/PetshopModels/PetShop.php");

class ActionsPetshopController
{
    public function actionCats()
    {
        $model = new Petshop();
        $allCats = $model->getCats();

        require("./Views/petshopAllCats.php");
    }

    public function actionWhiteFluffy()
    {
        $model = new Petshop();
        $whiteOrFluffy = $model->getWhiteOrFluffy();

        require("./Views/petshopWhiteOrFluffy.php");
    }

    public function  actionExpensive()
    {
        $model = new Petshop();
        $expensivePets = $model->getExpensive();

        require("./views/petshopExpensivePets.php");
    }
}
