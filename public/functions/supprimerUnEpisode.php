<!-- Suppression de l'épisode après vérification -->
<?php
if(isset($_POST['oui']))
{  
    $supEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $suppressionEpisode = $suppressionEpisodeManagers->suppressionEpisode($supEpisode);
    
    $supCommentaire  = isset($donnéesEpisode['numeroEpisode']) ? $_GET['episode'] : NULL;
    $suppressionCommentaire = $suppressionCommentaireManagers->suppressionCommentaire($supCommentaire);
        
    if ($suppressionEpisode && $suppressionCommentaire)
    {
        echo '<script>alert(" L\'épisode ' . $donneesEpisode['numeroEpisode'] . ' a bien été supprimé ");</script>';
        header("Location: supprimerUnEpisode");          
    }
    else
    {
        echo '<script>alert(" Erreur, aucun épisode n\'a été supprimé ");</script>';
    }  
}
elseif (isset($_POST['non']))
{
    header("Location: supprimerUnEpisode");
}
?>