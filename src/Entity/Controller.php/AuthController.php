<?php

namespace Controller;

class AuthController

{
    public function login()
    {
        global $userRepo;
        global $codeRepo;

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
    }
    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        header('Location:/?action=display');
    }
}
