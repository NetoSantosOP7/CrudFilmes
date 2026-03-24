<?php

define("ROOT" , dirname(__DIR__));

require_once ROOT . "/app/Controllers/FilmeController.php";

$controller = new FilmeController();

$action = $_GET['action'] ?? 'index';

$acoes = ["index", "create", "store", "edit", "update", "destroy", "catalogo"];

if(in_array($action, $acoes)) {
    $controller->$action();
} else {
    http_response_code(404);
    echo "Ação não encontrada.";
}