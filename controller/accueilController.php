<?php
require('model/model.php');
$postManagers = new PostManager(); // Création d'un objet
$episodes = $postManagers->dernierEpisode(); // Appel d'une fonction de cet objet

$postManager = new PostManager();
$data = $postManager->premierEpisode();

$connexionManager = new PostManager();
$connexion = $connexionManager-> connexionDuModerateur(); 

require('view/accueil.php');
