<?php
if (isset($_POST['publie']))
{
    if ($ajoutEpisode)
    {
        echo "L'episode " . $_POST['numeroEpisode'] . " a été ajouté";
        ?> <script language="Javascript"> document.location.replace("modifBlogController.php");  </script> <!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--> <?php
    }
    else
    {
        echo "Désolez, une erreur est survenu, Vous n'avez pas réussi à ajoutez l'épisode.";
    }  
}

?>