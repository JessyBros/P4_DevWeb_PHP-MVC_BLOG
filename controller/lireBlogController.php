<?php
require('../model/model.php');


$postManager = new PostManager();
$post = $postManager->lectureEpisode($_GET['episode']); 


require('../view/lireBlog.php');
