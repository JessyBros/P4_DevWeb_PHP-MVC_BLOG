<?php require('public/functions/ajouterUnEpisode.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="public/css/moderateur/ajouterUnEpisode.css" rel="stylesheet" />
    <title>ajouter un épisode</title>
    <script src="public/js/menuModerateur.js"></script>
</head>


<body>
   <?php require('public/textFunctions/headerModerateur.php'); ?>
    
<section id="corpsDeLaPage">

    <h1>Ajouter un épisode</h1>
    
    <form action="index.php?action=ajouterUnEpisode" method="post" id="formAjouter">
        <p>Episode
            <?= htmlspecialchars($nombreduDernierEpisode['numeroEpisode'] +1) ?>
        </p>
        <input name="numeroEpisode" value="<?= htmlspecialchars($nombreduDernierEpisode['numeroEpisode'] +1) ?>" id="numeroEpisode" required="" type="hidden">
        <p>titre <input name="titre" id="titre" required="" type="text"></p>
        <!--<p>image <input name="image" required="" type="text"></p>-->
        <p>Description <input name="description" id="description" required="" type="text"></p>
        <p>Texte <input name="texte" id="texte" required="" type="text"></p>
        
    </form>
    
</section>

</body>

</html>




