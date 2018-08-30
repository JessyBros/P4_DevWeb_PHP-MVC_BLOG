<?php $css = "public/css/utilisateur/connexion.css" ?>
<?php $menu = "public/js/menuEpisode.js" ?>
<?php $description = "Connexion pour Jean Forteroche." ?>
<?php $keywords = "connexion" ?>

<?php ob_start(); ?>


<?php require('public/textFunctions/headerUtilisateur.php'); ?>

<div id="conteneurConnexion">
    <h1>Connexion</h1>
    <form action="connexion" method="post">
        <p><input name="pseudo" placeholder="Pseudo" id="pseudo" type="text"></p>
        <p><input name="motDePasse" placeholder="Mot de passe" id="password" type="password"></p>
        <p><input value="connectez-Vous" name="connectezVous" type="submit"></p>
    </form>
    <?php echo "<p>" . $etatConnexion . "</p>"?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
