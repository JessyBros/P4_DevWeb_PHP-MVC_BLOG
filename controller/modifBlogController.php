<?php

require('../model/model.php');

$ajoutEpisodeManagers = new PostManager(); // Création d'un objet





$nombreduDernierEpisodeManager = new PostManager();
$nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();

$listEpisodeManagers = new PostManager(); // Création d'un objet
$listEpisode = $listEpisodeManagers->listEpisode(); // Appel d'une fonction de cet objet

$donnéesEpisodeManager = new PostManager();
    $getEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
$donnéesEpisode = $donnéesEpisodeManager->donnéesEpisode($getEpisode );

$modificationEpisodeManagers = new PostManager();
     $modifNumeroEpisode = isset($_POST['modifNumeroEpisode']) ? $_POST['modifNumeroEpisode'] : NULL;
     $modifTitre = isset($_POST['modifTitre']) ? $_POST['modifTitre'] : NULL;
     $modifDescription = isset($_POST['modifDescription']) ? $_POST['modifDescription'] : NULL;
     $modifTexte= isset($_POST['modifTexte']) ? $_POST['modifTexte'] : NULL;
$modificationEpisode = $modificationEpisodeManagers->modificationEpisode($modifTitre,$modifDescription,$modifTitre,$modifNumeroEpisode);

$suppressionEpisodeManagers = new PostManager();
 // check supprimer un episode.php
require('../view/modifBlog.php');
