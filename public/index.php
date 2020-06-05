<?php

use Controller\AuthController;
use Controller\HomeController;
use Entity\Game;
use Entity\User;

use ludk\Persistence\ORM;

require __DIR__ . '/../vendor/autoload.php';
session_start();
$orm = new ORM(__DIR__ . '/../Resources');
$manager = $orm->getManager();
$codeRepo = $orm->getRepository(Game::class);
$userRepo = $orm->getRepository(User::class);

$action = $_GET["action"] ?? "display";
switch ($action) {
    case 'register':
        break;

    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;
    case 'new':
        break;

    case 'display':
    default:
        $controller = new HomeController;
        $controller->display();
        break;
}
