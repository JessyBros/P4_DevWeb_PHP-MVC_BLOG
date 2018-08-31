<!-- Permet à l'utilisateur de modifié un épisode en ayant un bref aperçu de celui-ci -->
<?php $css = "public/css/moderateur/modifierUnEpisode.css" ?>
<?php $menu = "public/js/menuModerateur.js" ?>
<?php $description = "espace moderateur de JeanForteroche" ?>
<?php $keywords = "CRUD, episode, commentaire" ?>

<?php ob_start(); ?>


<?php require('public/textFunctions/headerModerateur.php'); ?>

<section id="corpsDeLaPage">

    <h1>Modifier un épisode</h1>

    <!-- Affiche un message d'erreur en cas de trafic d'url-->
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

            <?php  foreach ($listEpisode as $listEpisodes  ): ?>
            <a href="modifier-episode-<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
                <p> Episode
                    <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :
                        <?= htmlspecialchars($listEpisodes['titre']) ?>
                </p>
            </a>
            <?php endforeach; ?>
        </div>
    </nav>

</section>

<div id="alerte">
    <span id="messageAlerte"><?= $messageAlerte ?></span>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
