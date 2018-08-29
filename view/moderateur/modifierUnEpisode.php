<!-- Permet à l'utilisateur de modifié un épisode en ayant un bref aperçu de celui-ci -->
<?php require('public/functions/moderateur/modifierUnEpisode.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/modifierUnEpisode.css" rel="stylesheet" />
    <title>modifier un épisode</title>
    <link rel="icon" type="image/png" href="public/images/faviconAlaska.png" />
    <script src="public/js/menuModerateur.js"></script>
    <script src="public/js/editeurDeTexte.js"></script>
</head>


<body>

    <?php require('public/textFunctions/headerModerateur.php'); ?>

    <section id="corpsDeLaPage">

        <h1>Modifier un épisode</h1>

        <!-- Affiche un message d'erreur en cas de trafic d'url-->
        <?php require('public/functions/moderateur/verificationModifierUnEpisode.php'); ?>
        <div id="message">
            <?php echo $message ?>
        </div>

        <!-- Montre le formulaire préremplis avec la fonction get-->
        <form action="modifier-episode-<?= htmlspecialchars($donneesEpisode['numeroEpisode']) ?>" method="post" id="formEditionEpisode">
            <p>Episode
                <?= htmlspecialchars($donneesEpisode['numeroEpisode']) ?>
            </p>
            <input name="modifNumeroEpisode" value="<?= htmlspecialchars($donneesEpisode['numeroEpisode']) ?>" id="numeroEpisode" required="" type="hidden">
            <input name="modifNumeroEpisode" value="<?= htmlspecialchars($donneesEpisode['id']) ?>" id="numeroEpisode" required="" type="hidden">
            <p>titre : <input name="modifTitre" value="<?= htmlspecialchars($donneesEpisode['titre']) ?>" required="" type="text"></p>
            <p>description : <input name="modifDescription" value="<?= $donneesEpisode['description'] ?>" required="" type="text"></p>
            <p>Url de l'image d'aperçu : <input name="modifImageApercu" value="<?= $donneesEpisode['imageApercu'] ?>" required="" type="text"></p>

            <?php require('public/textFunctions/editeurHTML.php'); ?>

            <div id="editeur" contentEditable>

                <article>
                    <?= $donneesEpisode['texte'] ?>
                </article>

            </div>

            <input name="modifTexte" id="modifTexte" required="" type="hidden">


            <input onclick="modifEpisode();" type="submit" name="modifier" value="modifier l'épisode" />

        </form>

        <!-- Listes des épisodes-->
        <nav id="listesDesEpisodes">
            <h2>Listes des épisodes</h2>


            <div id="apercuDesEpisodes">
                <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
                <a href="modifier-episode-<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
                    <p> Episode
                        <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :
                            <?= htmlspecialchars($listEpisodes['titre']) ?>
                    </p>
                </a>
                <?php } $listEpisode->closeCursor(); ?>
            </div>
        </nav>

    </section>

    <div id="alerte">
        <span id="messageAlerte"><?= $messageAlerte ?></span>
    </div>

</body>

</html>
