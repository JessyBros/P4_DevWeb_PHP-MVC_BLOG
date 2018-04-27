<?php
require('../model/model.php');

$postManagers = new PostManager(); // Création d'un objet
$ajoutEpisode = $postManagers->ajoutEpisode();

$nombreduDernierEpisodeManager = new PostManager();
$nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();

require('../view/modifBlog.php');
