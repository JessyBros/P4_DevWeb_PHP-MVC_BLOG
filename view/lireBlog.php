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
    <nav id="choixEpisode">Choix de l'épisode
        <ul id="menuEpisode" style="display:none;">
            <?php while ($choixDeLepisode = $choixEpisode->fetch()) { ?>
            <li><a href="lireBlogController.php?episode=<?= $choixDeLepisode['numeroEpisode']?>">episode <?= $choixDeLepisode['numeroEpisode'] ?></a></li>
            <?php } $choixEpisode->closeCursor(); ?>
            
            <script>
            var menuEpisode = document.getElementById("menuEpisode");
       
                menuEpisode = true;

        // fonction au clik de l'utilisateur
        document.getElementById("choixEpisode").addEventListener("click", function(e)
        {
            if (menuEpisode)
            {
                document.getElementById("menuEpisode").style.display="block";
                menuEpisode = false;
            }
            else
            {
                document.getElementById("menuEpisode").style.display="none";
                menuEpisode = true;
            }
        });
            </script>
            
        </ul>
    </nav>
    
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
      

                <aside id="blockEcrireCommentaire">
                    <div id="miniBlockEcrireCommentaire">

                        <div>
                            <h3>
                                Écrivez votre commentaire !
                            </h3>
                        </div>
                        
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
                                <input type="hidden" id="numeroEpisode" name="numeroEpisode" value="<?= $post['numeroEpisode']?>" />
                            </div>
                            <div>
                                <input name="publie" type="submit" />
                            </div>
                        </form>

                    </div>
                </aside>

                <aside id="blockLireCommentaire">
   <?php/*
    if (isset($_POST["signaler"]))
    {
     $test =  "touche signaler " . $commentaire['autheur'] . " ok";        
    }*/
                   
?>

                    <h3 id="lesCommentaires">Les commentaires</h3>
                    
                    
                    
                    
                    <?php while ($commentaire = $commentaires->fetch()){ ?>
                   <!-- <form action="lireBlogController.php?episode=<?php/* echo $post['numeroEpisode']*/?>" method="post">
                    <button name="signaler">Signaler</button>
                    </form>-->
                    
                        <div class="miniBlockLireCommentaire">
                            <p><strong><?= htmlspecialchars($commentaire['autheur']) ?></strong> le <?= $commentaire['comment_date_fr'] ?></p>
                            <p> <?= nl2br(htmlspecialchars($commentaire['commentaire'])) ?></p>
                        </div>
                    
                    <?php } $commentaires->closeCursor(); ?>
                </aside>
    </section>



<?php
 
if (isset($_POST['publie']))   
{
    if ( isset($_POST['numeroEpisode']) && isset($_POST['autheur']) && isset($_POST['commentaire']) )
    {
        
        
        if ($postComment)
        {
             ?> <script language="Javascript"> document.location.replace("lireBlogController.php?episode=<?= $post['numeroEpisode']?>");  </script> <!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--> <?php

            echo"episode ajouté";        
        }
        else
        {
            echo"episode non ajouté";  
        }
    }
}
    ?>
    
    
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

        <footer>
            © 2018 - Mentions Légales -
        </footer>
</body>

</html>
