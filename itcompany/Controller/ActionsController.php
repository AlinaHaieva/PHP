<?php
require_once("./Models/ITcompany.php");

class ActionsController
{
    public function actionBefore()
    {
        $model = new ITcompany();
        $candidates = $model->candidates;

        require_once("./Views/before.php");
    }

    public function actionAfter()
    {
        $model = new ITcompany();
        $candidates = $model->candidates;
    }
}
