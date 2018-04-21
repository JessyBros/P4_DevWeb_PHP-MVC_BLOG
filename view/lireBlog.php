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
            
        <?php
        while ($data = $episode->fetch())
        {
          
        ?>
            <aside id="blockEpisode">
                <div class="headerEpisode">
                    <img class="imageEpisode" src="../public/images/alaska.jpg" alt="image"/>
                
                    <div class="libeleEpisode">
                        <h2>Episode <?= htmlspecialchars($data['numeroEpisode']) ?></h2>
                        <h3><?= htmlspecialchars($data['titre']) ?></h3>
                        <p>Publié le <?= htmlspecialchars($data['datePublication']) ?></p>
                    </div>
                    
                </div>
                <br>
                <article class="textEpisode">
                   <?= htmlspecialchars($data['texte']) ?>
                </article>
                
                <div id="conteneurEpisodeSuivPrec">
                    <button class="episodeSuivPrec">Episode précédent</button>
                    <button class="episodeSuivPrec">Episode suivant</button>
                </div>
                
            </aside>
            
             <?php
        }
        $episode->closeCursor();
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