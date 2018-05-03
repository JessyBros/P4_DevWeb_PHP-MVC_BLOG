 <?php require('public/functions/espaceConnexion.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/accueil.css" rel="stylesheet" />
    <script src="public/js/bouttonConnexion.js"></script>

</head>

<body>
    <header>
        <div>
            <img src="public/images/jeanForteroche.jpg" alt="Billet pour l'alaska">
            <a href="controller/lireBlogController.php">
                <h1>Jean Forteroche</h1>
            </a>
        </div>
        <button id="connexion" onclick="connexion()">Connexion</button>

        <!-- Espace connexion qui apparait au click du boutton connexion en position fixed -->
        <div id="conteneurConnexion">
            <form action="index.php" method="post">
                <p><input name="pseudo" placeholder="pseudo" id="pseudo" type="text"></p>
                <p><input name="motDePasse" placeholder="Mot de passe" id="password" type="password"></p>
                <p><input value="connectez-Vous" name="connectezVous" type="submit"></p>
            </form>
        </div>
    </header>

    <section id="page1">
        <h1>Un billet simple pour l'alaska</h1>
    </section>

    <section id="page2">
        <!-- Aperçu du premier épisode -->
        <h2>Présentation du livre et petit lien vers le premier épisodes.</h2>
        <aside id="conteneurBlock">
            <div class="blockEpisode">
                <h3 class="titreEpisode">Episode
                    <?= htmlspecialchars($data['numeroEpisode']) ?>
                </h3>
                <img class="imageEpisode" src="public/images/alaska.jpg" alt="imageEpisode">
                <p class="dateEpisode">publié le
                    <?= htmlspecialchars($data['datePublication']) ?>
                </p>
                <p class="textEpisode">
                    <?= htmlspecialchars($data['description']) ?>
                </p>
                <div id="conteneurButtonEpisode">
                    <a href="controller/lireBlogController.php?episode=<?= $data['numeroEpisode'] ?>">
                        <button class="buttonEpisode">Voir l'épisode</button>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Aperçu des trois derniers épisodes -->
        <h2>Last Episode (montre les trois deniers episodes)</h2>
        <?php while ($datas = $episodes->fetch()) { ?>
        <aside id="conteneurBlock">
            <div class="blockEpisode">
                <h3 class="titreEpisode">Episode
                    <?= htmlspecialchars($datas['numeroEpisode']) ?>
                </h3>
                <img class="imageEpisode" src="public/images/alaska.jpg" alt="imageEpisode">
                <p class="dateEpisode">publié le
                    <?= htmlspecialchars($datas['datePublication']) ?>
                </p>
                <p class="textEpisode">
                    <?= htmlspecialchars($datas['description']) ?>
                </p>
                <div id="conteneurButtonEpisode">
                    <a href="controller/lireBlogController.php?episode=<?= $datas['numeroEpisode'] ?>">
                                <button class="buttonEpisode">Voir l'épisode</button>
                            </a>
                </div>
            </div>
        </aside>
        <?php } $episodes->closeCursor(); ?>
        
    </section>
    <hr>
    <footer>© 2018 - Mentions Légales -</footer>

   
</body>

</html>
