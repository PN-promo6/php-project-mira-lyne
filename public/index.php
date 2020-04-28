<?php
/*
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

$items = array($gameOne, $gameTwo);
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
            <div class="col">
                <div class="card">
                    <img src=" images/death-stranding.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Death Stranding</h5>
                        <p class="card-text">Death Stranding est un très bon jeu. Ce n'est pas parce que, pour ma part,
                            je n'ai pas apprécié l'expérience comme je l'aurai voulu que je dois en perdre mon
                            objectivité. </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src=" images/uncharted-4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Uncharted 4 thief's end</h5>
                        <p class="card-text">Je viens de finir U4 c'est objectivement le meilleur épisode de la saga à
                            100 lieues du mauvais goût des précédent. </p>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="images/shadow-OTTR.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shadow of the tom raider</h5>
                        <p class="card-text">Episode dans la lignée des précédents. paysages magnifiques. des
                            casses-têtes bien pensés. par contre un peu déçus par les animation qui manquent de réalisme
                            lors des sauts.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="images/acodyssey.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Assassin'S Creed Odyssey</h5>
                        <p class="card-text">Bon jeux , pour les 10 premières heures de jeux rien à dire .. mise à part
                            quelques bug de l’IA qui reste coincé avec des objet sur leur trajet .</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="images/red-dead-redemption.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Red Dead Redemption 2</h5>
                        <p class="card-text">C'est un trés bon jeu, une réussite, le portage sur PC est tres bien, le
                            défaut les menus pas adapter au pc trop console et pas ergonomique du tout, j'ai pas eu de
                            déco ou de plantage,</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="images/the-last-of-us.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">The Last Of Us</h5>
                        <p class="card-text">Episode dans la lignée des précédents. paysages magnifiques. des
                            casses-têtes bien pensés. par contre un peu déçus par les animation qui manquent de réalisme
                            lors des sauts, et par des beugs sur certaine phase de jeu.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>