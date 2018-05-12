<?php
require('../model/model.php');

$listesEpisodesManager = new PostManager();
$listesEpisodes = $listesEpisodesManager->listesEpisodes();


require('../view/listesEpisodes.php');
