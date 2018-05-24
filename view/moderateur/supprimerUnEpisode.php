<?php require('public/functions/supprimerUnEpisode.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/supprimerUnEpisode.css" rel="stylesheet" />
    <title>supprimer un épisode</title>
    <script src="public/js/menuModerateur.js"></script>
</head>


<body>
   <?php require('public/textFunctions/headerModerateur.php'); ?>
    
<section id="corpsDeLaPage">

    <h1>Supprimer un épisode</h1>
    
 <!-- Affiche un message d'erreur en cas de trafic d'url-->
    <?php require('public/functions/verificationSupprimerUnEpisode.php'); ?>    
    <div id="message"><?php echo $message ?></div>
   
    <nav id="apercuDesEpisodes">
         
        <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
         <a href="index.php?action=supprimerUnEpisode&amp;episode=<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
             <p onclick="episodeClickUtilisateur()"> Episode <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :  <?= htmlspecialchars($listEpisodes['titre']) ?></p>
            </a>
        <?php } $listEpisode->closeCursor(); ?>  
    </nav>
    
    
    <form action="index.php?action=supprimerUnEpisode&episode=<?= htmlspecialchars($donnéesEpisode['numeroEpisode']) ?>" method="post" id="confirmationSuppressionEpisode">
        <p>Voulez-vous réellement supprimer l'épisode <?= $donnéesEpisode['numeroEpisode'] ?></p>
        <p>attention celui-ci sera déprimé définitivement !</p>
        <input name="numeroEpisode" value="<?= $donnéesEpisode['numeroEpisode'] ?>" type="hidden">
        <div>
            <button name="oui">Oui</button> | <button name="non">Non</button>
        </div>
    </form>
    
</section>

</body>

</html>


