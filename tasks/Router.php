<?php

require("Controllers/ActionsTasksController.php");

class Router
{
    public function initializeController()
    {
        $controller = new ActionsTasksController();

        if (!empty($_GET['action'])) {
            $controller->{$_GET['action']}();
        } else {
            $controller->actionMainPage();
        }
    }
}
