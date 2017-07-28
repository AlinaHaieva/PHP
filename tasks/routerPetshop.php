<?php
require("Controllers/ActionsPetshopController.php");

$controller = new ActionsPetshopController();

if (!empty($_GET['action'])) {
    $controller->{$_GET['action']}();
} else {
    $controller->actionCats();
}
