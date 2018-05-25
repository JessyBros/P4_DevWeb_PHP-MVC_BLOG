<?php 
if ( isset($_POST['signaler']) )
{
    $numEpisode = isset($_POST['numEpisode']) ? $_POST['numEpisode'] : NULL;
    $idCommentaire = isset($_POST['idCommentaire']) ? $_POST['idCommentaire'] : NULL;
    
 
   $postSignaler = $signalementDuCommentaire->commentaireSignaler($idCommentaire);
    
      if ($postSignaler)
        {
          
  /*  ?>
    <script language="Javascript">
        document.location.replace("index.php?action=lectureEpisode&episode= <?= $numEpisode ?>");
    </script>
    <!-- Ne fonctionne que si l'utilisateur ne desactive pas le js-->
    <?php*/
       
            /*header("Location: index.php?action=lectureEpisode&episode=$postNumeroEpisode");*/
            echo '<script>alert(" commentaire' . $idCommentaire . ' signalé ");</script>';        
        }
        else
        {
           echo '<script>alert(" Erreur, lors du signalement du commentaire ");</script>';
        }
    
}