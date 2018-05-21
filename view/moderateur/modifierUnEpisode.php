<?php require('public/functions/modifierUnEpisode.php'); ?> 
<!-- Montre le formulaire préremplis avec la fonction get-->
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