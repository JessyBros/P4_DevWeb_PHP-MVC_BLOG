<?php
require('model/model.php');
$postManagers = new PostManager(); // Création d'un objet
$posts = $postManagers->getPosts(); // Appel d'une fonction de cet objet

$postManager = new PostManager();
$post = $postManager->getPost(); 

$connexionManager = new PostManager();
$connexion = $connexionManager-> moderateur(); 

require('view/accueil.php');
