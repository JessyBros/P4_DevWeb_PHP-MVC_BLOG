<?php
require('../model/model.php');

$postManagers = new PostManager(); // Création d'un objet
$ajoutEpisode = $postManagers->ajoutEpisode();

require('../view/modifBlog.php');
