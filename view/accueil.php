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
           <button id="connexion" onclick="connexion()">Connexion</button>
            <script type="text/javascript">
              function connexion()
                {
                    document.getElementById('conteneurConnexion').style.display="block";
                }
            </script>
          
             
        </header>
       
        <section id="page1">
            <h1>Un billet simple pour l'alaska</h1>
        </section>
        
        <section id="page2">
       
               <h2>Présentation du livre et petit lien vers le premier épisodes.</h2>
            <?php
                while ($data = $episode->fetch())
                {
            ?>
                
               <aside id="conteneurBlock">
                    <div class="blockEpisode">
                        <h3 class="titreEpisode">Episode <?= htmlspecialchars($data['numeroEpisode']) ?></h3>
                        <img class="imageEpisode"src="public/images/alaska.jpg" alt="imageEpisode">
                        <p class="dateEpisode">publié le <?= htmlspecialchars($data['datePublication']) ?></p>
                        <p class="textEpisode"><?= htmlspecialchars($data['description']) ?></p>
                        <div id="conteneurButtonEpisode">
                            <a  href="controller/lireBlogController.php">
                                <button class="buttonEpisode">Voir l'épisode</button>
                            </a>
                        </div>
                    </div>
                </aside>
            
           
            <?php } $episode->closeCursor(); ?>
              
               
                <h2>Last Episode (montre les trois deniers episodes)</h2>
            <?php
                while ($datas = $episodes->fetch())
                {
            ?>
                <aside id="conteneurBlock">
                    <div class="blockEpisode">
                        <h3 class="titreEpisode">Episode <?= htmlspecialchars($datas['numeroEpisode']) ?></h3>
                        <img class="imageEpisode"src="public/images/alaska.jpg" alt="imageEpisode">
                        <p class="dateEpisode">publié le <?= htmlspecialchars($datas['datePublication']) ?></p>
                        <p class="textEpisode"><?= htmlspecialchars($datas['description']) ?></p>
                        <div id="conteneurButtonEpisode">
                            <a href="controller/lireBlogController.php">
                                <button class="buttonEpisode">Voir l'épisode</button>
                            </a>
                        </div>
                    </div>
                </aside>

              <?php } $episodes->closeCursor(); ?>          
        
        </section>
          
       <?php
                while ($connexions = $connexion->fetch())
                {
            ?>
 <div id="conteneurConnexion">
        <form  action="index.php" method="post">
				
            <p><input name="pseudo" placeholder="pseudo" id="pseudo" type="text"></p>
					
            <p><input name="motDePasse" placeholder="Mot de passe" id="password" type="password"></p>
						
			<p><input value="connectez-Vous" name="connectezVous" type="submit"></p>
        </form>
     
        <?php
                 
        if (isset($_POST['connectezVous']))
        {          
            if( (!empty($_POST['pseudo'])) && (!empty($_POST['motDePasse'])) )
            {
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['motDePasse'];
                 
                if (  $pseudo==($connexions['pseudo']) && $mdp==($connexions['motDePasse']))
                {
                   ?> <script language="Javascript"> document.location.replace("controller/lireBlogController.php");  </script> <!-- Ne fonctionne que si l'utilisateur ne desactive pas le js--> <?php
                   
                }
                else if (  $pseudo!==($connexions['pseudo']) || $mdp!==($connexions['motDePasse']))
                {
                    echo "<p>Erreur sur le pseudo ou le mot de passe </p>";
                }
            }
             else if ( (empty($_POST['pseudo'])) && (empty($_POST['motDePasse'])))
                {
                    echo "<p>Oublie du pseudo et du mot de passe ! </p>";
                }  
            else if  (empty($_POST['motDePasse']))  
                {
                    echo "<p>Oublie du pseudo !</p>";
                }
            else if  (empty($_POST['pseudo'])) 
                {
                    echo "<p>Oublie du mot de passe ! </p>";
                } 
            }  
        ?>
     </div>
          <?php
            }
            
            $connexion->closeCursor();
                   ?>  
        <hr>
        <footer>© 2018 - Mentions Légales -</footer>       
    </body>
</html>