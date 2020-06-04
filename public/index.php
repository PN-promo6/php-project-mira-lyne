<?php

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
        // TODO faire la deconnexion
        break;
    case 'login':
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $usersWithThisLogin = $userRepo->findBy(array("username" => $_POST['username']));
            if (count($usersWithThisLogin) == 1) {
                $firstUserWithThisLogin = $usersWithThisLogin[0];
                if ($firstUserWithThisLogin->password != ($_POST['password'])) {
                    $errorMsg = "Wrong password.";
                    include "../templates/login.php";
                } else {
                    $_SESSION['user'] = $usersWithThisLogin[0];
                    header('Location:/?action=display');
                }
            } else {
                $errorMsg = "Nickname doesn't exist.";
                include "../templates/login.php";
            }
        } else {
            include "../templates/login.php";
        }
        break;
    case 'new':
        break;
    case 'display':
    default:
        $items = array();
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            if (strpos($search, "@") === 0) {
            } else {
                $items = $codeRepo->findBy(array("name" => $search));
            }
        } else {
            $items = $codeRepo->findAll();
        }
        include "../templates/display.php";
        break;
}
