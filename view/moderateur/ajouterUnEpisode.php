<?php require('public/functions/ajouterUnEpisode.php'); ?>

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