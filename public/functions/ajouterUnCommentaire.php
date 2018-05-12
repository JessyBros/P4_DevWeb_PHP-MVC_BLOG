<?php 
if ( isset($_POST['publie']) )
{
    $postNumeroEpisode = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $postAutheur = isset($_POST['autheur']) ? $_POST['autheur'] : NULL;
    $postCommentaire = isset($_POST['commentaire']) ? $_POST['commentaire'] : NULL;
    
   $postComment = $commentManager->postComment($postNumeroEpisode,$postAutheur,$postCommentaire);
    
      if ($postComment)
        {
    ?>
    <script language="Javascript">
        document.location.replace("lireBlogController.php?episode=<?= $post['numeroEpisode']?>");
    </script>
    <!-- Ne fonctionne que si l'utilisateur ne desactive pas le js-->
    <?php

            echo '<script>alert(" commentaire ajouté ");</script>';        
        }
        else
        {
           echo '<script>alert(" Erreur, aucun commentaire n\'a été ajouté ");</script>';
        }
    
}