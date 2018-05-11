<?php 
if ( isset($_POST['publie']) )
{
    $numeroEpisode = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $titre = isset($_POST['titre']) ? $_POST['titre'] : NULL;
    $description = isset($_POST['description']) ? $_POST['description'] : NULL;
    $texte = isset($_POST['texte']) ? $_POST['texte'] : NULL;
    
    $ajoutEpisode = $ajoutEpisodeManagers->ajoutEpisode($numeroEpisode,$titre,$description,$texte);
    
    if ($ajoutEpisode)
    {
    
        echo '<script>alert(" L\'épisode ' . $_POST['numeroEpisode'] . ' a été ajouté ");</script>';
    ?>
    
        <script language="Javascript">document.location.replace("modifBlogController.php");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
    }
    else
    {
        echo '<script>alert(" Erreur, aucun épisode n\'a été ajouté ");</script>';
    }  

    
}