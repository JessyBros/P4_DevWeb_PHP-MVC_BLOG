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
                    <img class="imageEpisode" src="../public/images/alaska.jpg" alt="image"/>
                
                    <div class="libeleEpisode">
                        <h2>Episode <?= htmlspecialchars($post['numeroEpisode']) ?></h2>
                        <h3><?= htmlspecialchars($post['titre']) ?></h3>
                        
                    </div>
                    
                </div>
                <br>
                <article class="textEpisode">
                   <?= htmlspecialchars($post['texte']) ?>
                </article>
                
                <div id="conteneurEpisodeSuivPrec">
                   <a  href="lireBlogController.php?episode=<?= $post['numeroEpisode']-1 ?>">
                       <button class="episodePrec">Episode précédent</button>
                    </a>
                   <a  href="lireBlogController.php?episode=<?= $post['numeroEpisode']+1 ?>">
                       <button class="episodeSuiv">Episode suivant</button>
                    </a>
                </div>
                
            </aside>
            <?php
            if ($post['numeroEpisode'] <2)
            {
            ?>
                <style> .episodePrec{display: none;}</style>
            <?php 
            }
            else if ( $post['numeroEpisode'] = strlen($post['numeroEpisode']) ) // episode n = n.. ex : 2 =2; 3=3  
            {
            ?>
                <style> .episodeSuiv{display: none;}</style>
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
                    <div>
                        <label for="pseudo">Choisissez votre Pseudo</label>
                        <input type="text">
                    </div>
                    <br>
                    <div>
                        <label for="commentaire">Contenu du commentaire</label>
                        <textarea></textarea>
                    </div>
                    <div id="conteneurButtonEnvoyerUnCommentaire">
                        <button id="ButtonEnvoyezUnCommentaire">Envoyez</button>
                    </div>
                    
                    
                </div>
            </aside>

            
            
            
            <aside id="blockLireCommentaire">
                
                <h3 id="lesCommentaires">
                    Les commentaires
                </h3>
                
                <div class="miniBlockLireCommentaire">
                    
                    <div>
                        Aucun commentaire pour le moment.
                    </div>
              
                </div>
         
            </aside>
        
        </section>
        
        
        <footer>
            © 2018 - Mentions Légales -
        </footer>       
    </body>
</html>