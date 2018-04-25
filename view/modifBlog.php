<?php
	session_start();

 //Ajout des utilisateurs
   if( isset($_POST["episode"]) && isset($_POST["titre"]) && isset($_POST["texte"]) )
   {
      $episode = $_POST["episode"];
      $titre = $_POST["titre"];
      $texte = $_POST["texte"];
      
$ajoute = $ajoutEpisode($episode, $titre, $texte);
            if($ajoute)
            {
               echo '<script>alert("Episode ajouté");</script>';
			   /*header('location:modifBlogController.php');*/
            }
            else
            {
               echo '<script>alert("Erreur dans l\'ajout de l\'episode");</script>';
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
       <form action="modifBlog.php" method="post">
           <p>Episode <input name="episode" required="" type="text"></p>
           <p>titre <input name="titre" required="" type="text"></p>
           <!--<p>image <input name="image" required="" type="text"></p>-->
           <p>Texte <input name="texte" required="" type="text"></p>
           <input type="submit" value="Publié" />
        </form>
    </body>
</html>