<?php
require_once("Controllers/ActionsITcompanyController.php");

$controller = new ActionsITcompanyController();

if (!empty($_GET['action'])) {
    $controller->{$_GET['action']}();
} else {
    $controller->actionBefore();
}