<?php require('public/functions/ajouterUnCommentaire.php'); ?>
<?php require('public/functions/buttonEpisodeSuivPrec.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="public/css/lireBlog.css" rel="stylesheet" />
    <script src="public/js/menuEpisode.js"></script>


</head>

<body>
    <!-- En tête en position fixed -->
<?php 
    require('public/textFunctions/header.php');
    
?>
  

    <!-- Visuel de l'épisode -->
    <section id="corpsDeLaPage">
        <aside id="blockEpisode">
            <div class="headerEpisode">
                <img class="imageEpisode" src="public/images/alaska.jpg" alt="image" />
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
                <?= htmlspecialchars($post['texte']) ?>
            </article>
            <div id="conteneurEpisodeSuivPrec">
                
                <a href="index.php?action=lectureEpisode&amp;episode=<?= $post['numeroEpisode']-1 ?>">
                <button class="episodePrec">Episode précédent</button>
            </a>
                <a href="index.php?action=lectureEpisode&amp;episode=<?= $post['numeroEpisode']+1 ?>">
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
                <form action="index.php? action=lectureEpisode&amp;episode=<?= $post['numeroEpisode']?>" method="post">
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
                        <input name="publie" type="submit" />
                    </div>
                </form>
            </div>
        </aside>

        <!-- Tous les commentaires de l'épisode -->
        <aside id="blockLireCommentaire">
            <h3 id="lesCommentaires">Les commentaires</h3>
            <?php while ($commentaire = $commentaires->fetch()){ ?>
            <!-- <form action="lireBlogController.php?episode=<?php/* echo $post['numeroEpisode']*/?>" method="post">
                    <button name="signaler">Signaler</button>
                    </form>-->
            <div class="miniBlockLireCommentaire">
                <p><strong><?= htmlspecialchars($commentaire['autheur']) ?></strong> le
                    <?= $commentaire['comment_date_fr'] ?>
                </p>
                <p>
                    <?= nl2br(htmlspecialchars($commentaire['commentaire'])) ?>
                </p>
            </div>
            <button>Signaler</button>
            <?php } $commentaires->closeCursor(); ?>
        </aside>
    </section>


    <!-- Pied de page -->
    <footer>
        © 2018 - Mentions Légales -
    </footer>

    <script src="../public/js/menuEpisode.js"></script>
</body>

</html>
