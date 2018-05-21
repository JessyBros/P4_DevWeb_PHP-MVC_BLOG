<?php require('public/functions/espaceConnexion.php'); ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/utilisateur/connexion.css" rel="stylesheet" />
    <script src="public/js/menuEpisode.js"></script>
    

</head>

<body>
<?php require('public/textFunctions/header.php');?>

<div id="conteneurConnexion">
    <h1>Connexion</h1>
    <form action="index.php?action=connexion" method="post">
        <p><input name="pseudo" placeholder="Pseudo" id="pseudo" type="text"></p>
        <p><input name="motDePasse" placeholder="Mot de passe" id="password" type="password"></p>
        <p><input value="connectez-Vous" name="connectezVous" type="submit"></p>
    </form>
    <?php echo "<p>" . $etatConnexion . "</p>"?>
</div>
    

<style>
 
</style>
    </body>

</html>