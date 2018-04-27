<?php
	/*session_start();*/

if (isset($_POST['publie']))
{
    if ( $nombreduDernierEpisode['numeroEpisode'] +1 === $_POST['numeroEpisode'] )
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
    else
    {
        echo "Le numéro de l'épisode ne suit pas le numéro de l'épisode précédent";
    }
    
}

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Modification du blog</title>
    </head>


    <body>
        <form action="modifBlogController.php" method="post">
            <p>Episode <input name="numeroEpisode" value="<?= htmlspecialchars($nombreduDernierEpisode['numeroEpisode'] +1) ?>" id="numeroEpisode" required="" type="text"></p>
            <p>titre <input name="titre" id="titre" required="" type="text"></p>
            <!--<p>image <input name="image" required="" type="text"></p>-->
            <p>Description <input name="description" id="description" required="" type="text"></p>
            <p>Texte <input name="texte" id="texte" required="" type="text"></p>
            <input type="submit" name="publie" value="Publié" />
        </form>
    </body>

    </html>
