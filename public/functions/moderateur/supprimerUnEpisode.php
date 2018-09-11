<?php
if(isset($_POST['oui']))
{  
    $supEpisode  = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $suppressionEpisode = $suppressionEpisodeManagers->suppressionEpisode($supEpisode);
    
    $supCommentaire  = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $suppressionCommentaire = $suppressionCommentaireManagers->suppressionCommentaire($supCommentaire);
        
    if ($suppressionEpisode && $suppressionCommentaire)
    {
        $messageAlerte="L'épisode ".$supEpisode." a bien été supprimé "; 
         header("Refresh: 3;url=supprimerUnEpisode");
    }
    else
    {
        $messageAlerte="Erreur, aucun épisode n'a été supprimé ";
    } 
    
}
elseif (isset($_POST['non']))
{
     $messageAlerte="";
     header("Refresh: 3;url=supprimerUnEpisode");

}
else{
    $messageAlerte="";
}
?>
