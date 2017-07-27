<?php
require_once("./Models/ITcompany.php");

class ActionsController
{
    public function actionBefore()
    {
        $model = new ITcompany();
        $candidates = $model->getCandidates();

        require("./Views/before.php");
    }

    public function actionAfter()
    {
        $model = new ITcompany();
        $teams = $model->getTeams();

        require("./Views/after.php");
    }
}
