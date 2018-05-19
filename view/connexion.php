<?php require('public/functions/espaceConnexion.php'); ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/connexion.css" rel="stylesheet" />
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
    h1, p{color: red;}
    
    #conteneurConnexion{
        position: relative;
        top: 150px;
       height: 300px;
        min-width: 270px;
        width: 60%;
       margin: auto;
        background-color: #161b26;
        border: 2px solid #8b9937;
        border-radius: 5px;
        z-index: 2;
        text-align: center;
    }
    
    #conteneurConnexion input {
        text-align: center;
        width: 50%;
    }
</style>
    </body>

</html>