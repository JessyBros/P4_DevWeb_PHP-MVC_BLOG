<!-- Permet au modérateur de supprimer un épisode-->
<?php $css = "public/css/moderateur/supprimerUnEpisode.css" ?>
<?php $menu = "public/js/menuModerateur.js" ?>
<?php $description = "espace moderateur de JeanForteroche" ?>
<?php $keywords = "CRUD, episode, commentaire" ?>

<?php ob_start(); ?>

<?php require('public/textFunctions/headerModerateur.php'); ?>

<section id="corpsDeLaPage">

    <h1>Supprimer un épisode</h1>

    <!-- Affiche un message d'erreur en cas de trafic d'url-->
    <?php require('public/functions/moderateur/verificationSupprimerUnEpisode.php'); ?>
    <div id="message">
        <?php echo $message ?>
    </div>

    <!-- La listes des épisodes déjà publiés-->
    <nav id="apercuDesEpisodes">
        <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
        <a href="supprimer-episode-<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
            <p> Episode
                <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :
                    <?= htmlspecialchars($listEpisodes['titre']) ?>
            </p>
        </a>
        <?php } $listEpisode->closeCursor(); ?>
    </nav>

    <!-- Vérification après sélection d'un épisode, pour savoir si le modérateur souhaite réellement et définitivement supprimer l'épisode -->
    <form action="supprimerUnEpisode" method="post" id="confirmationSuppressionEpisode">
        <p>Voulez-vous réellement supprimer l'épisode
            <?= $donneesEpisode['numeroEpisode'] ?>
        </p>
        <p>attention celui-ci sera déprimé définitivement !</p>
        <input name="numeroEpisode" value="<?= $donneesEpisode['numeroEpisode'] ?>" type="hidden">
        <div>
            <button name="oui">Oui</button> | <button name="non">Non</button>
        </div>
    </form>

</section>

<div id="alerte">
    <span id="messageAlerte"><?= $messageAlerte ?></span>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
