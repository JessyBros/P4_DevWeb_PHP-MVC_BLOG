<!-- Permet à l'utilisateur d'avoir un bref visuel du rendu des épisodes publiés-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/apercuDesEpisodes.css" rel="stylesheet" />
    <title>aperçu des épisodes</title>
    <link rel="icon" type="image/png" href="public/images/faviconAlaska.png" />
    <script src="public/js/menuModerateur.js"></script>
</head>


<body>

    <?php require('public/textFunctions/headerModerateur.php'); ?>-

    <section id="corpsDeLaPage">
        <h1>Aperçu des épisodes</h1>

        <!-- Affiche un message d'erreur en cas de trafic d'url-->
        <?php require('public/functions/moderateur/verificationApercuDesEpisodes.php'); ?>
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
                <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
                <a href="apercuDesEpisodes-<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
                    <p> Episode
                        <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :
                            <?= htmlspecialchars($listEpisodes['titre']) ?>
                    </p>
                </a>

                <?php } $listEpisode->closeCursor(); ?>
            </div>
        </nav>
    </section>


</body>

</html>
