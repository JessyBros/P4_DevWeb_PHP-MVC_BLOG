<!-- Permet l'ajout d'un commentaire à la page Lectures des épisodes, selon l'épisode correspondant-->

<?php 
$messageAlerte = "";
if ( isset($_POST['publie']) )
{
    $postNumeroEpisode = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $postAutheur = isset($_POST['autheur']) ? $_POST['autheur'] : NULL;
    $postCommentaire = isset($_POST['commentaire']) ? $_POST['commentaire'] : NULL;
    
    $postComment = $commentManager->postComment($postNumeroEpisode,$postAutheur,$postCommentaire);
    
      if ($postComment)
        {       
            
            $messageAlerte = " Votre commentaire '" . $postCommentaire . "' a bien été ajouté à l'épisode " . $postNumeroEpisode ;
           header("Refresh: 3;url=episode-".$postNumeroEpisode);
        }
        else
        {
            $messageAlerte = " Erreur, aucun commentaire n'a été ajouté ";
        }
        ?>
<style>
    #alerte {
        display: block;
    }

</style>
<?php
}
