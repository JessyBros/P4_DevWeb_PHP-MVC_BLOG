<!-- Permet à l'utilisateur de changé son pseudo et son mot de passe (crypté) pour se connecter à son espace modérateur-->
<?php $css = "public/css/moderateur/moderateurPseudoMdp.css" ?>
<?php $menu = "public/js/menuModerateur.js" ?>
<?php $description = "espace moderateur de JeanForteroche" ?>
<?php $keywords = "CRUD, episode, commentaire" ?>

<?php ob_start(); ?>

<?php  require('public/textFunctions/headerModerateur.php'); ?>

<section id="corpsDeLaPage">

    <h1>Changement du pseudo et/ou du mot de passe</h1>

    <form action="moderateurPseudoMdp" method="post">

        <p>Pseudo : <input name="pseudo" value="<?= htmlspecialchars($data['pseudo']) ?>" required="" type="text"></p>
        <p>Mot de passe : <input name="motDePasse" value="" required="" type="text"></p>
        <input type="submit" name="modifierAcces" value="modifier" />

    </form>

</section>

<div id="alerte">
    <span id="messageAlerte"><?= $messageAlerte ?></span>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
