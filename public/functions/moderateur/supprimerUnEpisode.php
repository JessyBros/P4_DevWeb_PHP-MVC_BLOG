<!-- Suppression de l'épisode après vérification -->
<?php
$messageAlerte="";

if(isset($_POST['oui']))
{  
    $supEpisode  = isset($_GET['episode']) ? $_GET['episode'] : NULL;
    $suppressionEpisode = $suppressionEpisodeManagers->suppressionEpisode($supEpisode);
    
    $supCommentaire  = isset($donnéesEpisode['numeroEpisode']) ? $_GET['episode'] : NULL;
    $suppressionCommentaire = $suppressionCommentaireManagers->suppressionCommentaire($supCommentaire);
        
    if ($suppressionEpisode && $suppressionCommentaire)
    {
        $messageAlerte="L'épisode " . $supEpisode . " a bien été supprimé ";    
        header("Location: supprimerUnEpisode");
    }
    else
    {
        $messageAlerte="Erreur, aucun épisode n'a été supprimé ";
    } 
    
}
elseif (isset($_POST['non']))
{
     header("Location: supprimerUnEpisode");
}

 ?>
<style>
    #alerte {
        display: block;
    }

</style>
<?php
?>