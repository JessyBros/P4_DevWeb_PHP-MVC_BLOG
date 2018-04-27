<?php
require('../model/model.php');


$postManager = new PostManager();
$post = $postManager->lectureEpisode($_GET['episode']); 

$nombreduDernierEpisodeManager = new PostManager();
$nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();



require('../view/lireBlog.php');
