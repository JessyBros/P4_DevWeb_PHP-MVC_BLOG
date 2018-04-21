<?php
require('../model/model.php');


$postManager = new PostManager();
$episode = $postManager->lectureEpisode(); 
$id = $_POST["id"];

require('../view/lireBlog.php');
