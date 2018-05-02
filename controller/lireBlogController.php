<?php
require('../model/model.php');


$postManager = new PostManager();
$post = $postManager->lectureEpisode($_GET['episode']); 

$nombreduDernierEpisodeManager = new PostManager();
$nombreduDernierEpisode = $nombreduDernierEpisodeManager->nombreduDernierEpisode();


$commentManager = new PostManager();
$commentaires = $commentManager->getComments($_GET['episode']);

$commentManager = new PostManager(); // Création d'un objet
$postComment = $commentManager->postComment();

$commentManager = new PostManager();
$choixEpisode = $commentManager->choixEpisode();

/*function addComment($postId, $autheur, $commentaire)
{
    $commentManager = new PostManager();

    $affectedLines = $commentManager->postComment($postId, $autheur, $commentaire);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location:lireBlogController.php?episode=<?= $post["numeroEpisode"]');
    }
}*/

require('../view/lireBlog.php');
