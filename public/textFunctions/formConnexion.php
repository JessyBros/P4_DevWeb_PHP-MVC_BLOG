<?php require('public/functions/espaceConnexion.php'); ?>
<script src="public/js/bouttonConnexion.js"></script>
<!-- Espace connexion qui apparait au click du boutton connexion en position fixed -->
<div id="conteneurConnexion">
    <form action="index.php" method="post">
        <p><input name="pseudo" placeholder="pseudo" id="pseudo" type="text"></p>
        <p><input name="motDePasse" placeholder="Mot de passe" id="password" type="password"></p>
        <p><input value="connectez-Vous" name="connectezVous" type="submit"></p>
    </form>
    <?php echo "<p>" . $etatConnexion . "</p>"?>
</div>

<style>

    #conteneurConnexion{
        display: none;
        height: 175px;
        width: 270px;
        position: fixed;
        top: 150px;
        left: 50%;
        margin-left: -135px;
        background-color: #161b26;
        border: 2px solid #8b9937;
        border-radius: 5px;
        z-index: 2;
        text-align: center;
    }
</style>