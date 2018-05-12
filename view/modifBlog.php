<?php require('../public/functions/ajouterUnEpisode.php'); ?>
<?php require('../public/functions/modifierUnEpisode.php'); ?>
<?php require('../public/functions/supprimerUnEpisode.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="../public/css/modifBlog.css" rel="stylesheet" />
    <title>Modification du blog</title>
    
</head>


<body>
    <div>
    <button onclick="ajouterUnEpisode()">ajouter un épisode</button>
    <button onclick="editerUnEpisode()" id="editerUnEpisode">editer un épisode</button>
    </div>
    <!-- Apparait au click du boutton éditer un épisode -->
    <section id="apercuDesEpisodes">        
    <?php while ($listEpisodes = $listEpisode->fetch()) { ?>
     <a href="modifBlogController.php?episode=<?= htmlspecialchars($listEpisodes['numeroEpisode']) ?>">
         <p onclick="episodeClickUtilisateur()"> Episode <?= htmlspecialchars($listEpisodes['numeroEpisode']) ?> :  <?= htmlspecialchars($listEpisodes['titre']) ?></p>
        </a>
    <?php } $listEpisode->closeCursor(); ?>  
    </section>
    
     <!-- Apparait au click d'un épisode NON TERMINE-->
    <form action="modifBlogController.php" method="post" id="formEditionEpisode">
        <p>Episode <?= htmlspecialchars($donnéesEpisode['numeroEpisode']) ?></p>
        <input name="modifNumeroEpisode" value="<?= htmlspecialchars($donnéesEpisode['numeroEpisode']) ?>" id="numeroEpisode" required="" type="hidden">
        <input name="modifNumeroEpisode" value="<?= htmlspecialchars($donnéesEpisode['id']) ?>" id="numeroEpisode" required="" type="hidden">
        <p>titre : <input name="modifTitre" value="<?= htmlspecialchars($donnéesEpisode['titre']) ?>" required="" type="text"></p>
        <p>description : <input name="modifDescription" value="<?= htmlspecialchars($donnéesEpisode['description']) ?>" required="" type="text"></p>
        <p>texte : <input name="modifTexte" value="<?= htmlspecialchars($donnéesEpisode['texte']) ?>" required="" type="text"></p>
        <input type="submit" name="modifier" value="modifier l'épisode" />
        <input type="submit" name="supprimer" value="supprimer l'épisode" />
    </form>  
     
    <!-- Au click de éditer, affichez tous les épisodes par ligne.
        au click d'un des épisodes afficher sur la droite l'épisode correspondant avec le boutton modifier et supprimer
        si modifier >>> modifier, si supprimer >> etes vous sur?>>> si oui supprimer
        -->
    <form action="modifBlogController.php" method="post" id="formAjouter">
        <p>Episode
            <?= htmlspecialchars($nombreduDernierEpisode['numeroEpisode'] +1) ?>
        </p>
        <input name="numeroEpisode" value="<?= htmlspecialchars($nombreduDernierEpisode['numeroEpisode'] +1) ?>" id="numeroEpisode" required="" type="hidden">
        <p>titre <input name="titre" id="titre" required="" type="text"></p>
        <!--<p>image <input name="image" required="" type="text"></p>-->
        <p>Description <input name="description" id="description" required="" type="text"></p>
        <p>Texte <input name="texte" id="texte" required="" type="text"></p>
        <input type="submit" name="publie" value="Publié" />
    </form>
    
    <script src="../public/js/gestionEpisodes.js"></script>
    <style>
#formAjouter, #apercuDesEpisodes, /*#formEditionEpisode*/
{
    display: none;
}
#editezUnEpisode
{
    display: block;
}

#formAjouter
{
    border: 2px solid black;
    background-color: red;
    
}</style>
</body>

</html>
