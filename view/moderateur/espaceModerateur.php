<!-- Menu d'accueil de l'écrivain lors de sa connexion -->
<?php $css = "public/css/moderateur/espaceModerateur.css" ?>
<?php $menu = "public/js/menuModerateur.js" ?>
<?php $description = "espace moderateur de JeanForteroche" ?>
<?php $keywords = "CRUD, episode, commentaire" ?>

<?php ob_start(); ?>

<?php require('public/textFunctions/headerModerateur.php'); ?>

<section id="corpsDeLaPage">

    <a href="apercuDesEpisodes">
        <p>Aperçu des épisodes</p>
    </a>

    <a href="ajouterUnEpisode">
        <p>Ajouter un épisode</p>
    </a>

    <a href="modifierUnEpisode">
        <p>Modifier un épisode</p>
    </a>

    <a href="supprimerUnEpisode">
        <p>supprimer un épisode</p>
    </a>

    <a href="signalerUnCommentaire">
        <p>Les commentaires signalés</p>
    </a>

    <a href="moderateurPseudoMdp">
        <p>Modification : <br> Pseudo / Mot de passe</p>
    </a>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
