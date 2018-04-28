<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="../public/css/lireBlog.css" rel="stylesheet" />
</head>

<body>
    <header>
        <p><a href="../index.php">Un billet simple pour l'Alaska</a></p>
        <p>Choix de l'épisode</p>
    </header>

    <section id="corpsDeLaPage">


        <aside id="blockEpisode">
            <div class="headerEpisode">
                <img class="imageEpisode" src="../public/images/alaska.jpg" alt="image" />

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
                <a href="lireBlogController.php?episode=<?= $post['numeroEpisode']-1 ?>">
                       <button class="episodePrec">Episode précédent</button>
                    </a>
                <a href="lireBlogController.php?episode=<?= $post['numeroEpisode']+1 ?>">
                       <button class="episodeSuiv">Episode suivant</button>
                    </a>
            </div>

        </aside>
        <?php
   
            if ($post['numeroEpisode'] <2)
            {
            ?>
            <style>
                .episodePrec {
                    display: none;
                }

            </style>
            <?php 
            }
            else if ( $post['numeroEpisode'] === $nombreduDernierEpisode['numeroEpisode'] ) // episode n = n.. ex : 2 =2; 3=3  
            {
            ?>
            <style>
                .episodeSuiv {
                    display: none;
                }

            </style>
            <?php
            }
            ?>



                <aside id="blockEcrireCommentaire">
                    <div id="miniBlockEcrireCommentaire">

                        <div>
                            <h3>
                                Écrivez votre commentaire !
                            </h3>
                        </div>
                        <br>
                        <form action="lireBlogController.php?episode=<?= $post['numeroEpisode']?>" method="post">
                            <div>
                                <label for="autheur">Choisissez votre Pseudo</label><br />
                                <input type="text" id="autheur" name="autheur" />
                            </div>
                            <div>
                                <label for="commentaire">Contenu du commentaire</label><br />
                                <textarea id="commentaire" name="commentaire"></textarea>
                            </div>
                            <div>
                                <input type="submit" />
                            </div>
                        </form>

                    </div>
                </aside>




                <aside id="blockLireCommentaire">

                    <h3 id="lesCommentaires">
                        Les commentaires
                    </h3>
                    <?php
        while ($commentaire = $commentaires->fetch())
        {
        ?>
                        <div class="miniBlockLireCommentaire">
                            <p><strong><?= htmlspecialchars($commentaire['autheur']) ?></strong> le
                                <?= $commentaire['comment_date_fr'] ?>
                            </p>
                            <p>
                                <?= nl2br(htmlspecialchars($commentaire['commentaire'])) ?>
                            </p>
                        </div>

                </aside>

    </section>



    <?php
        }
        ?>

        <footer>
            © 2018 - Mentions Légales -
        </footer>
</body>

</html>
