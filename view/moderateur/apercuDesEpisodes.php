<!-- Permet à l'utilisateur d'avoir un bref visuel du rendu des épisodes publiés-->
<?php $css = "public/css/moderateur/apercuDesEpisodes.css" ?>
<?php $menu = "public/js/menuModerateur.js" ?>
<?php $description = "espace moderateur de JeanForteroche" ?>
<?php $keywords = "CRUD, episode, commentaire" ?>

<?php ob_start(); ?>


<?php require('public/textFunctions/headerModerateur.php'); ?>-

<section id="corpsDeLaPage">
    <h1>Aperçu des épisodes</h1>

    <!-- Affiche un message d'erreur en cas de trafic d'url-->
    <div id="message">
        <?php echo $message ?>
    </div>

    <!-- Affichage de l'épisode séléctionné-->
    <aside id="blockEpisode">
        <div class="headerEpisode">
            <div class="libeleEpisode">
                <h2>Episode
                    <?= htmlspecialchars($post['numeroEpisode']) ?>
                </h2>
                <h3>
                    <?= htmlspecialchars($post['titre']) ?>
                </h3>
            </div>
        </div>
        <br>
        <article class="textEpisode">
            <?= $post['texte'] ?>
        </article>

    </aside>

    <!-- Listes des épisodes publiés-->
    <nav id="listesDesEpisodes">
        <h2>Listes des épisodes</h2>


        <div id="apercuDesEpisodes">

            <?php  foreach ($listEpisode as $listEpisodes  ): ?>
            <a href="apercuDesEpisodes-<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
                <p> Episode
                    <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :
                        <?= htmlspecialchars($listEpisodes['titre']) ?>
                </p>
            </a>

            <?php endforeach; ?>
        </div>
    </nav>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
