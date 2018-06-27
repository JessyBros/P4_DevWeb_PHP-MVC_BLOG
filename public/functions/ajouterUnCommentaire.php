<!-- Permet l'ajout d'un commentaire à la page Lectures des épisodes, selon l'épisode correspondant-->

<?php 
if ( isset($_POST['publie']) )
{
    $postNumeroEpisode = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $postAutheur = isset($_POST['autheur']) ? $_POST['autheur'] : NULL;
    $postCommentaire = isset($_POST['commentaire']) ? $_POST['commentaire'] : NULL;
    
   $postComment = $commentManager->postComment($postNumeroEpisode,$postAutheur,$postCommentaire);
    
      if ($postComment)
        {       
            header("Location: episode-$postNumeroEpisode");
            echo '<script>alert(" '. $postNumeroEpisode . $postAutheur . $postCommentaire .'commentaire ajouté ");</script>';        
        }
        else
        {
           echo '<script>alert(" Erreur, aucun commentaire n\'a été ajouté ");</script>';
        }
    
}
