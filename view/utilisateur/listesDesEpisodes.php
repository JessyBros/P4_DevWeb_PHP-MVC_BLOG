<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/utilisateur/listesDesEpisodes.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="public/images/faviconAlaska.png" />
    <script src="public/js/menuEpisode.js"></script>
    <META NAME="Description" CONTENT="Listes de chaque épisode publié. 'un simple billet pour l'alaska'">
    <META NAME="Identifier-URL" CONTENT="https://unbilletsimplepourlalaska.000webhostapp.com/">
    <META NAME="Keywords" CONTENT="blog, alaska, episodes, listes">
</head>

<body>

    <div>
        <?php require('public/textFunctions/headerUtilisateur.php'); ?>

        <section id="corpsDeLaPage">

            <aside id="titre">
                <h1>Les épisodes</h1>
            </aside>

            <?php while ($listesEpisode = $listesEpisodes->fetch()) { ?>
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
            <?php } $listesEpisodes->closeCursor(); ?>

        </section>
    </div>
    <footer id="footer">
        © 2018 - Mentions Légales -
    </footer>


</body>

</html>
