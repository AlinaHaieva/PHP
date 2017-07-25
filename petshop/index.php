<?php
require_once("controller/ActionsController.php");

$controller = new ActionsController();

if (isset($_GET['action'])) {
    $controller->{$_GET['action']}();
} else {
    $controller->actionCats();
}
