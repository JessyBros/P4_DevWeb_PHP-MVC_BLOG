<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/utilisateur/lecturesDesEpisodes.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="public/images/faviconAlaska.png" />
    <script src="public/js/menuEpisode.js"></script>
    <META NAME="Description" CONTENT=" épisode intégral du livre 'un simple billet pour l'alaska'. numéro de l'épisode concercerné, titre, description, texte. Les internautes peuvent également lire mais écrire un commentaires et donnez leur avis sur l'épisode.">
    <META NAME="Identifier-URL" CONTENT="url du site dans l'hébergeur">
    <META NAME="Keywords" CONTENT="blog, alaska, episodes, voyage, lecture, commentaire, avis.">
</head>

<body>
    <div>

        <!-- En tête en position fixed -->
        <?php require('public/textFunctions/headerUtilisateur.php'); ?>

        <!-- Visuel de l'épisode -->
        <section id="corpsDeLaPage">

            <!-- Affiche un message d'erreur en cas de trafic d'url-->
            <div id="message">
                <?php echo $message ?>
            </div>

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
                <div id="conteneurEpisodeSuivPrec">

                    <a href="episode-<?= $post['numeroEpisode']-1 ?>">
                <button class="episodePrec">Episode précédent</button>
            </a>
                    <a href="episode-<?= $post['numeroEpisode']+1 ?>">
                <button class="episodeSuiv">Episode suivant</button>
            </a>
                </div>
            </aside>

            <!-- Ecriture du comentaire -->
            <aside id="blockEcrireCommentaire">
                <div id="miniBlockEcrireCommentaire">
                    <div>
                        <h3>
                            Écrivez votre commentaire !
                        </h3>
                    </div>
                    <form action="episode-<?= $post['numeroEpisode']?>" method="post">
                        <div>
                            <label for="autheur">Choisissez votre Pseudo</label><br />
                            <input type="text" id="autheur" name="autheur" />
                        </div>
                        <div>
                            <label for="commentaire">Contenu du commentaire</label><br />
                            <textarea id="commentaire" name="commentaire"></textarea>
                        </div>
                        <div>
                            <input type="hidden" id="numeroEpisode" name="numeroEpisode" value="<?= $post['numeroEpisode']?>" />
                        </div>
                        <div>
                            <input name="publie" type="submit" value="publie" />
                        </div>
                    </form>
                </div>
            </aside>

            <!-- Tous les commentaires de l'épisode -->
            <aside id="blockLireCommentaire">
                <h3 id="lesCommentaires">Les commentaires</h3>
                <?php while ($commentaire = $commentaires->fetch()){ ?>

                <div class="miniBlockLireCommentaire">
                    <div>
                        <p><strong class="pseudo"><?= htmlspecialchars($commentaire['autheur']) ?></strong> -
                            <?= $commentaire['comment_date_fr'] ?>
                        </p>
                        <p>
                            <?= nl2br(htmlspecialchars($commentaire['commentaire'])) ?>
                        </p>
                    </div>

                    <!-- permet de récupérer le commentaire signalé -->
                    <form action="episode-<?= $post['numeroEpisode']?>" method="post">

                        <input type="hidden" name="numEpisode" value="<?= $post['numeroEpisode']?>" />

                        <input type="hidden" name="idCommentaire" value="<?= $commentaire['id']?>" />

                        <input name="signaler" type="submit" value="Signaler" />
                    </form>
                </div>
                <?php } $commentaires->closeCursor(); ?>
            </aside>

        </section>
        <br>
    </div>

    <div id="alerte">
        <span id="messageAlerte"><?= $messageAlerte ?></span>
    </div>

    <!-- Pied de page -->
    <footer id="footer">
        © 2018 - Mentions Légales -
    </footer>

</body>

</html>
