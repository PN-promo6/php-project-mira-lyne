<?php

namespace Controller;

class HomeController

{
    public function display()
    {
        global $userRepo;
        global $codeRepo;

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
    }
}
