<?php require('public/functions/modifierUnEpisode.php'); ?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/modifierUnEpisode.css" rel="stylesheet" />
    <title>modifier un épisode</title>
    <script src="public/js/menuModerateur.js"></script>
</head>


<body>
   <?php require('public/textFunctions/headerModerateur.php'); ?>
    
<section id="corpsDeLaPage">

    <h1>Modifier un épisode</h1>
    
     <!-- Affiche un message d'erreur en cas de trafic d'url-->
    <?php require('public/functions/verificationModifierUnEpisode.php'); ?>    
    <div id="message"><?php echo $message ?></div>
    
    <!-- Montre le formulaire préremplis avec la fonction get-->
    <form action="index.php?action=modifierUnEpisode&amp;episode=<?= htmlspecialchars($donnéesEpisode['numeroEpisode']) ?>" method="post" id="formEditionEpisode">
        <p>Episode <?= htmlspecialchars($donnéesEpisode['numeroEpisode']) ?></p>
        <input name="modifNumeroEpisode" value="<?= htmlspecialchars($donnéesEpisode['numeroEpisode']) ?>" id="numeroEpisode" required="" type="hidden">
        <input name="modifNumeroEpisode" value="<?= htmlspecialchars($donnéesEpisode['id']) ?>" id="numeroEpisode" required="" type="hidden">
        <p>titre : <input name="modifTitre" value="<?= htmlspecialchars($donnéesEpisode['titre']) ?>" required="" type="text"></p>
        <p>description : <input name="modifDescription" value="<?= htmlspecialchars($donnéesEpisode['description']) ?>" required="" type="text"></p>
        <p>texte : <input name="modifTexte" value="<?= htmlspecialchars($donnéesEpisode['texte']) ?>" required="" type="text"></p>
        <input type="submit" name="modifier" value="modifier l'épisode" />
        <input type="submit" name="supprimer" value="supprimer l'épisode" />
    </form>
    
    <h2>Listes des épisodes</h2>
    

    <nav id="apercuDesEpisodes">        
        <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
         <a href="index.php?action=modifierUnEpisode&amp;episode=<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
             <p onclick="episodeClickUtilisateur()"> Episode <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :  <?= htmlspecialchars($listEpisodes['titre']) ?></p>
            </a>
        <?php } $listEpisode->closeCursor(); ?>  
    </nav>
    
</section>

</body>

</html>





