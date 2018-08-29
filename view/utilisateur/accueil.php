<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/utilisateur/accueil.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="public/images/faviconAlaska.png" />
    <script src="public/js/menuEpisode.js"></script>
    <META NAME="Description" CONTENT="Page d'accueil. Blog de Jean Forteroche qui écris un livre s'intitulant 'un billet simple pour l'alaska' Description courte du premier et des trois derniers épisodes publié par l'auteur.">
    <META NAME="Identifier-URL" CONTENT="https://unbilletsimplepourlalaska.000webhostapp.com/">
    <META NAME="Keywords" CONTENT="blog, alaska, episodes, description">
</head>

<body>
    <?php require('public/textFunctions/headerUtilisateur.php'); ?>

    <!-- image de fond avec titre du livre -->
    <section id="page1">
        <h1>Un billet simple pour l'alaska</h1>
    </section>

    <section id="page2">

        <!-- Aperçu du premier épisode -->
        <h2>Le commencement ce fait toujours par le premier épisode :)</h2>

         <a href="episode-<?= htmlspecialchars($data['numeroEpisode']) ?>">
        <aside id="blockPremierEpisode">
            <h3 class="numeroEpisode">Episode
                <?= htmlspecialchars($data['numeroEpisode']) ?>
            </h3>
            <h4 class="titreEpisode">
                <?= htmlspecialchars($data['titre']) ?>
            </h4>
            <img class="imagePremierEpisode" src="<?= $data['imageApercu']?>" alt="ErreurAffichage : <?= htmlspecialchars($data['titre']) ?>">

            <p class="textEpisode">
                <?= htmlspecialchars($data['description']) ?>
            </p>
            <p class="dateEpisode">publié le
                <?= htmlspecialchars($data['datePublication']) ?>
            </p>
           
        </aside>
        </a>


        <!-- Aperçu des trois derniers épisodes -->
        <h2>Les trois derniers épisodes actuels</h2>

        <section id="conteneurBlockLastEpisode">
            <?php while ($datas = $episodes->fetch()) { ?>

            <aside class="blockLastEpisode">
                <a href="episode-<?= $datas['numeroEpisode'] ?>">
                    <nav class="LastEpisode">
                        <h3 class="titreEpisode">Episode
                            <?= htmlspecialchars($datas['numeroEpisode']) ?>
                        </h3>
                        <img class="imageEpisode" src="<?= $datas['imageApercu']?>" alt="ErreurAffichage : <?= htmlspecialchars($datas['titre']) ?>">
                        <p class="dateEpisode">publié le
                            <?= htmlspecialchars($datas['datePublication']) ?>
                        </p>
                        <p class="textEpisode">
                            <?= htmlspecialchars($datas['description']) ?>
                        </p>
                    </nav>
                </a>
            </aside>

            <?php } $episodes->closeCursor(); ?>

            <!-- block listes des épisodes -->
        </section>
        <a href="listesDesEpisodes">
            <div id="conteneurListeDesEpisodes">Tous les épisodes</div>
        </a>

    </section>
    <hr>
    <footer>© 2018 - Mentions Légales -</footer>

</body>

</html>
