<?php
require('../model/model.php');

$postManagers = new PostManager(); // Création d'un objet
$ajoutEpisode = $postManagers->ajoutEpisode();

$nombreduDernierEpisodeManager = new PostManager();
$nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();

$listEpisodeManagers = new PostManager(); // Création d'un objet
$listEpisode = $listEpisodeManagers->listEpisode(); // Appel d'une fonction de cet objet

$donnéesEpisodeManager = new PostManager();
$donnéesEpisode = $donnéesEpisodeManager->donnéesEpisode(isset($_GET['episode']));

$modificationEpisodeManagers = new PostManager(); // Création d'un objet
$modificationEpisode = $modificationEpisodeManagers->modificationEpisode($titre,$description,$texte);

$suppressionEpisodeManagers = new PostManager(); // Création d'un objet
$suppressionEpisode = $suppressionEpisodeManagers->suppressionEpisode(isset($_GET['episode']));

require('../view/modifBlog.php');
