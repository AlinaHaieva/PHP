<?php
require("./Models/ITcompanyModels/ITcompany.php");

class ActionsITcompanyController
{
    public function actionBefore()
    {
        $model = new ITcompany();
        $candidates = $model->getCandidates();

        require("./Views/ITbefore.php");
    }

    public function actionAfter()
    {
        $model = new ITcompany();
        $model->hire();

        $teams = $model->teams;

        require("./Views/ITafter.php");
    }
}
