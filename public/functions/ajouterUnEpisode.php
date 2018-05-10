<?php

if ( isset($_POST['publie']) )
    
{
    $numeroEpisode = isset($_POST['numeroEpisode']) ? $_POST['numeroEpisode'] : NULL;
    $titre = isset($_POST['titre']) ? $_POST['titre'] : NULL;
    $description = isset($_POST['description']) ? $_POST['description'] : NULL;
    $texte = isset($_POST['texte']) ? $_POST['texte'] : NULL;    
     
    if ($ajoutEpisode)
    {
        ?>
        <script> alert(<?php echo  "L'episode " . $_POST['numeroEpisode'] . " a été ajouté"?><?php)?>;</script>?>
    
        <script language="Javascript">document.location.replace("modifBlogController.php");</script><!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--><?php
            }
            else
            {
                echo "Désolez, une erreur est survenu, Vous n'avez pas réussi à ajoutez l'épisode.";
            }  



    
}
