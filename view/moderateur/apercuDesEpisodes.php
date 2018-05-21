<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/apercuDesEpisodes.css" rel="stylesheet" />
    <title>aperçu des épisodes</title>
    <script src="public/js/menuModerateur.js"></script>
</head>


<body>
   <?php require('public/textFunctions/headerModerateur.php'); ?>
    
<section id="corpsDeLaPage">

    <h2>Listes des épisodes</h2>
    

    <nav id="apercuDesEpisodes">        
        <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
         <a href="index.php?action=apercuDesEpisodes&amp;episode=<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
             <p onclick="episodeClickUtilisateur()"> Episode <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :  <?= htmlspecialchars($listEpisodes['titre']) ?></p>
            </a>
        <?php } $listEpisode->closeCursor(); ?>  
    </nav>
    <h1>Aperçu des épisodes</h1>
    
    
</section>

</body>

</html>


  


