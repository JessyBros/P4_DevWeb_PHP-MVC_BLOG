<?php $css = "public/css/utilisateur/listesDesEpisodes.css" ?>
<?php $menu = "public/js/menuEpisode.js" ?>
<?php $description = "Listes de chaque épisode publié. 'un simple billet pour l'alaska'" ?>
<?php $keywords = "blog, alaska, episodes, listes" ?>

<?php ob_start(); ?>

<div>
    <?php require('public/textFunctions/headerUtilisateur.php'); ?>

    <section id="corpsDeLaPage">

        <aside id="titre">
            <h1>Les épisodes</h1>
        </aside>


        <?php  foreach ($listesEpisodes as $listesEpisode ): ?>

        <aside class="blockEpisodes">
            <p>Episode :
                <?= $listesEpisode['numeroEpisode'] ?> -
                    <strong><?= $listesEpisode['titre'] ?></strong>
            </p>
            <p>
                <?= $listesEpisode['description'] ?>
            </p>
            <a id="lireEpisode" href="episode-<?= $listesEpisode['numeroEpisode']?>">Lire l'épisode</a>
            <p>
                <?= $listesEpisode['datePublication'] ?>
            </p>

        </aside>
        <?php endforeach; ?>

    </section>
</div>
<footer id="footer">
    © 2018 - Mentions Légales -
</footer>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
