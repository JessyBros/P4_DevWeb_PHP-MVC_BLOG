<?php
require('../model/model.php');


$postManager = new PostManager();
$data = $postManager->lectureEpisode($_GET['id']); 


require('../view/lireBlog.php');
