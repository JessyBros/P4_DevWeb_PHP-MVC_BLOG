<?php 
if ( isset($_POST['publie']) )
{
    $numeroEpisode = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $verificationEpisodeExistant = $verificationEpisodeExistantManagers->verificationEpisodeExistant($numeroEpisode);
     
    if ($verificationEpisodeExistant)
    {
        $messageAlerte="L'épisode " . $_POST['numeroEpisode'] . " existe déjà !";           
    }
    elseif($numeroEpisode < 1)
    {
        $messageAlerte="Erreur, l'épisode ne peut pas avoir la valeur 0 ou une valeur négative. ";
        
    }
    else
    {
        $titre = isset($_POST['titre']) ? $_POST['titre'] : NULL;
        $description = isset($_POST['description']) ? $_POST['description'] : NULL;
        $texte = isset($_POST['texte']) ? $_POST['texte'] : NULL;
        $imageApercu = isset($_POST['imageApercu']) ? $_POST['imageApercu'] : NULL;

        $ajoutEpisode = $ajoutEpisodeManagers->ajoutEpisode($numeroEpisode,$titre,$description,$texte,$imageApercu);
        
        if ($ajoutEpisode)
        {
             $messageAlerte=" L'épisode " . $_POST['numeroEpisode'] . " a été ajouté !";
            
        }
        else
        {
            $messageAlerte=" Erreur, aucun épisode n\'a été ajouté !";
        }  
    }
}
else
{
    $messageAlerte="";
}
