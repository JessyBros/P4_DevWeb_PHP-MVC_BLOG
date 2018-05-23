<?php 
if (isset($_POST['modifier']))
{
     
    if ($modificationEpisode)
    {
        echo '<script>alert(" L\'épisode ' . $donnéesEpisode['numeroEpisode'] . ' a été modifié ");</script>';
    ?>
    
        <script language="Javascript">document.location.replace("index.php?action=modifierUnEpisode&episode=<?= htmlspecialchars($donnéesEpisode['numeroEpisode']) ?>");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
    }
    else
    {
        echo '<script>alert(" Erreur, aucun épisode n\'a été modifié ");</script>';
    }  

    
}


?>