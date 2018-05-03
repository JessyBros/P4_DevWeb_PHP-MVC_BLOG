<?php require('../public/functions/ajouterUnEpisode.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Modification du blog</title>
</head>


<body>
    <form action="modifBlogController.php" method="post">
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
    
    <button>Modifier l'épisode</button>
    <button>Supprimer l'épisode</button>
</body>

</html>
