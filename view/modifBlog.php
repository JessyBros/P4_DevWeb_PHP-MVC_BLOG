<?php require('../public/functions/ajouterUnEpisode.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="../public/css/modifBlog.css" rel="stylesheet" />
    <title>Modification du blog</title>
    
</head>


<body>
    <button onclick="ajouterUnEpisode()">ajouter un épisode</button>
    <button onclick="editerUnEpisode()" id="editezUnEpisode">editer un épisode</button>
    
    <section id="apercuDesEpisodes">
    <button onclick="modifierUnEpisode()" id="modifierUnEpisode">Modifier l'épisode</button>
    <button onclick="supprimerUnEpisode()" id="supprimerUnEpisode">Supprimer l'épisode</button>
    </section>
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
</body>

</html>
