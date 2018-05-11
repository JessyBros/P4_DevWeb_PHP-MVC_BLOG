<?php
if(isset($_POST['supprimer']))
{  
    echo '<script>alert(" touche supprimé ");</script>';
    $supEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
   $suppressionEpisode = $suppressionEpisodeManagers->suppressionEpisode($supEpisode);//echec
        
        if ($suppressionEpisode)
        {
            echo '<script>alert(" L\'épisode  a été supprimé ");</script>';
         ?>

           <script language="Javascript">document.location.replace("modifBlogController.php");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
        }
        else
        {
            echo '<script>alert(" Erreur, aucun épisode n\'a été supprimé ");</script>';
        }  
    
   
}
?>