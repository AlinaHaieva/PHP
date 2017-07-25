<?php
require_once("controller/ActionsController.php");

$controller = new ActionsController();

$controller->actionBefore();
$controller->actionAfter();
