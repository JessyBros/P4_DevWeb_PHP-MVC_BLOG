<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="public/css/accueil.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <header>
            <div>  
                <img src="public/images/jeanForteroche.jpg" alt="Billet pour l'alaska">
                 <a href="controller/lireBlogController.php"><h1>Jean Forteroche</h1></a>
            </div>            
           <button id="connexion">Connexion</button>
            <script>
                document.getElementById("#connexion").onclick = function()
                {
                   var p = document.createElement=('p');
                    document.body.appendChild(p);
                    p.textContent="test";
                };
            </script>
          
             
        </header>
        
        <section id="page1">
            <h1>Un billet simple pour l'alaska</h1>
        </section>
        
        <section id="page2">
       
               <h2>Présentation du livre et petit lien vers le premier épisodes.</h2>
            <?php
                while ($data = $post->fetch())
                {
            ?>
                
               <aside id="conteneurBlock">
                    <a class="blockEpisode" href="controller/lireBlogController.php" >
                        <h3 class="titreEpisode">Episode <?= htmlspecialchars($data['numeroEpisode']) ?></h3>
                        <img class="imageEpisode"src="public/images/alaska.jpg" alt="imageEpisode">
                        <p class="dateEpisode">publié le <?= htmlspecialchars($data['datePublication']) ?></p>
                        <p class="textEpisode"><?= htmlspecialchars($data['description']) ?></p>
                        <div id="conteneurButtonEpisode">
                            <button class="buttonEpisode">Voir l'épisode</button>
                        </div>
                    </a>
                </aside>
            
           
            <?php
            }
            $post->closeCursor();
            ?>
              
               
                <h2>Last Episode (montre les trois deniers episodes)</h2>
            <?php
                while ($datas = $posts->fetch())
                {
            ?>
                <aside id="conteneurBlock">
                    <a class="blockEpisode" href="controller/lireBlogController.php" >
                        <h3 class="titreEpisode">Episode <?= htmlspecialchars($datas['numeroEpisode']) ?></h3>
                        <img class="imageEpisode"src="public/images/alaska.jpg" alt="imageEpisode">
                        <p class="dateEpisode">publié le <?= htmlspecialchars($datas['datePublication']) ?></p>
                        <p class="textEpisode"><?= htmlspecialchars($datas['description']) ?></p>
                        <div id="conteneurButtonEpisode">
                            <button class="buttonEpisode">Voir l'épisode</button>
                        </div>
                    </a>
                </aside>


              <?php
            }
            
            $posts->closeCursor();
                   ?>          
        
        </section>
           
       <?php
                while ($connexions = $connexion->fetch())
                {
            ?>
 
        <form action="index.php" method="post">
				
            <p><input name="pseudo" placeholder="pseudo" id="pseudo" type="text"></p>
					
            <p><input name="motDePasse" placeholder="Mot de passe" id="password" type="password"></p>
						
			<p><input value="connectez-Vous " type="submit"></p>
        </form>
     
        <?php
            if( (!empty($_POST['pseudo'])) && (!empty($_POST['motDePasse'])) )
            {
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['motDePasse'];
                
                if (  $pseudo==($connexions['pseudo']) && $mdp==($connexions['motDePasse']))
                {
                    header('Location:controller/lireBlogController.php');
                    echo "<p>connexion reussi </p>";
                }
                else
                {
                    echo "<p>Erreur sur le pseudo ou le mot de passe </p>";
                }
            
            }
            else 
            {
                echo "<p>oublie du pseudo ou du mot de passe </p>";
            }
        ?>
          <?php
            }
            
            $connexion->closeCursor();
                   ?>  
        <hr>
        <footer>© 2018 - Mentions Légales -</footer>       
    </body>
</html>