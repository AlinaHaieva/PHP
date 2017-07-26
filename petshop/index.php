<?php
require("controller/ActionsController.php");

$controller = new ActionsController();

if (!empty($_GET['action'])) {
    $controller->{$_GET['action']}();
} else {
    $controller->actionCats();
}
