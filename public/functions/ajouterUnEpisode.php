<!-- Permet à L'écrivain d'ajouter un commentaire, si celui-ci n'a pas déjà était enregitré.-->
<?php 
if ( isset($_POST['publie']) )
{
    $numeroEpisode = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $verificationEpisodeExistant = $verificationEpisodeExistantManagers->verificationEpisodeExistant($numeroEpisode);
     
    if ($verificationEpisodeExistant)
    {
        echo '<script>alert(" L\'épisode ' . $_POST['numeroEpisode'] . ' existe déjà ");</script>';
           
    }
    elseif($numeroEpisode < 1)
    {
        echo '<script>alert("Erreur, l\'épisode ne peut pas avoir la valeur 0 ou une valeur négative. ");</script>';
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
            echo '<script>alert(" L\'épisode ' . $_POST['numeroEpisode'] . ' a été ajouté ");</script>';

        }
        else
        {
            echo '<script>alert(" Erreur, aucun épisode n\'a été ajouté ");</script>';
        }  
    }       
}
  
    