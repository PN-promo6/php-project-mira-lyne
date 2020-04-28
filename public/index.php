<?php

use Entity\Game;
use Entity\User;

require '../vendor/autoload.php';

$userMirams = new User();
$userMirams->id = 1;
$userMirams->username = "Miramasse";
$userMirams->password = "heyoo";

$gameOne = new Game();
$gameOne->id = 1;
$gameOne->name = "Uncharted 4 Thief's end";
$gameOne->picture = "https://margxt.fr/wp-content/uploads/2016/06/Uncharted-4.jpg";
$gameOne->notice = "Je viens de finir U4 c'est objectivement le meilleur épisode de la saga à 100 lieues du mauvais goût des précédent.";
$gameOne->creationDate = time();
$gameOne->user = $userMirams;

$gameTwo = new Game();
$gameTwo->id = 2;
$gameTwo->name = "Assassin'S Creed Odyssey";
$gameTwo->picture = "https://www.journaldugeek.com/content/uploads/2018/06/acodyssey-screen-greeceepicodyssey-e3-110618-230pm-pst.jpg";
$gameTwo->notice = "Bon jeux , pour les 10 premières heures de jeux rien à dire .. mise à part quelques bug de l’IA qui reste coincé avec des objet sur leur trajet .";
$gameTwo->creationDate = time();
$gameTwo->user = $userMirams;

$items = array($gameOne, $gameTwo, $gameOne, $gameTwo, $gameOne, $gameTwo, $gameOne, $gameTwo, $gameOne, $gameTwo, $gameOne, $gameTwo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?time=<?php time(); ?>">
    <title>Plateforme</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg p-3 mb-2 bg-dark text-white">
        <a class="navbar-brand text-white " href="#">Navbar</a>
        <button class="navbar-toggler" type="button " data-toggle="collapse text-white"
            data-target="#navbarSupportedContent text-white" aria-controls="navbarSupportedContent text-white"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégorie
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>

            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <?php
            $itemNumber = 0;
            foreach ($items as $item) {
                if ($itemNumber > 0 && $itemNumber % 3 == 0) {
                    echo '</div><div class="row">';
                }
            ?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $item->picture; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->name; ?></h5>
                        <p class="card-text"><?php echo $item->notice; ?></p>
                    </div>
                </div>
            </div>
            <?php
                $itemNumber++;
            }
            ?>
        </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>