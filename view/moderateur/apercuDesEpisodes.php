
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/apercuDesEpisodes.css" rel="stylesheet" />
    <title>aperçu des épisodes</title>
    <script src="public/js/menuModerateur.js"></script>
</head>


<body>
   
   <?php require('public/textFunctions/headerModerateur.php'); ?>-
<section id="corpsDeLaPage">
     <h1>Aperçu des épisodes</h1>
    
     <!-- Affiche un message d'erreur en cas de trafic d'url-->
    <?php require('public/functions/verificationApercuDesEpisodes.php'); ?>    
    <div id="message"><?php echo $message ?></div>
    
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
                <?= $post['texte'] ?>
            </article>
       
        </aside>

    <h2>Listes des épisodes</h2>
    

    <nav id="apercuDesEpisodes">        
        <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
         <a href="index.php?action=apercuDesEpisodes&amp;episode=<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
             <p onclick="episodeClickUtilisateur()"> Episode <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :  <?= htmlspecialchars($listEpisodes['titre']) ?></p>
            </a>
        <?php } $listEpisode->closeCursor(); ?>  
    </nav>
    
</section>
          
</body>

</html>