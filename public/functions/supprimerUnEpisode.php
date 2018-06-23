<?php
if(isset($_POST['oui']))
{  

    $supEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $suppressionEpisode = $suppressionEpisodeManagers->suppressionEpisode($supEpisode);
    
    $supCommentaire  = isset($donnéesEpisode['numeroEpisode']) ? $_GET['episode'] : NULL;
    $suppressionCommentaire = $suppressionCommentaireManagers->suppressionCommentaire($supCommentaire);
        
        if ($suppressionEpisode && $suppressionCommentaire)
        {
            echo '<script>alert(" L\'épisode ' . $donnéesEpisode['numeroEpisode'] . ' a bien été supprimé ");</script>';
         ?>

           <script language="Javascript">document.location.replace("supprimerUnEpisode");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
        }
        else
        {
            echo '<script>alert(" Erreur, aucun épisode n\'a été supprimé ");</script>';
        }  
    
   
}
elseif (isset($_POST['non']))
{
     ?>

           <script language="Javascript">document.location.replace("supprimerUnEpisode");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
}
?>