<!-- Permet au modérateur de supprimer un épisode-->
<?php require('public/functions/supprimerUnEpisode.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/supprimerUnEpisode.css" rel="stylesheet" />
    <title>supprimer un épisode</title>
    <script src="public/js/menuModerateur.js"></script>
</head>


<body>
    <?php require('public/textFunctions/headerModerateur.php'); ?>

    <section id="corpsDeLaPage">

        <h1>Supprimer un épisode</h1>

        <!-- Affiche un message d'erreur en cas de trafic d'url-->
        <?php require('public/functions/verificationSupprimerUnEpisode.php'); ?>
        <div id="message">
            <?php echo $message ?>
        </div>

        <!-- La listes des épisodes déjà publiés-->
        <nav id="apercuDesEpisodes">
            <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
            <a href="supprimer-episode-<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
                <p onclick="episodeClickUtilisateur()"> Episode
                    <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :
                        <?= htmlspecialchars($listEpisodes['titre']) ?>
                </p>
            </a>
            <?php } $listEpisode->closeCursor(); ?>
        </nav>

        <!-- Vérification après sélection d'un épisode, pour savoir si le modérateur souhaite réellement et définitivement supprimer l'épisode -->
        <form action="supprimer-episode-<?= htmlspecialchars($donneesEpisode['numeroEpisode']) ?>" method="post" id="confirmationSuppressionEpisode">
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

</body>

</html>
