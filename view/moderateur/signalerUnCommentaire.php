<!--Aperçu de tous les épisodes signalés par les utilisateurs-->
<?php $css = "public/css/moderateur/signalerUnCommentaire.css" ?>
<?php $menu = "public/js/menuModerateur.js" ?>
<?php $description = "espace moderateur de JeanForteroche" ?>
<?php $keywords = "CRUD, episode, commentaire" ?>

<?php ob_start(); ?>

<?php require('public/textFunctions/headerModerateur.php'); ?>

<section id="corpsDeLaPage">


    <h2>Liste des épisodes signalés par les internautes</h2>

    <!-- Afficher la liste des commentaires signalés-->
    <aside id="listeDesCommentairesSignales">

        <?php while ($commentaireSignaler = $afficheLesCommentairesSignaler->fetch()) { ?>
        <p>
            <a href="commentaire-<?= htmlspecialchars($commentaireSignaler['id'])?>">
                <p>
                    <strong>
                        commentaire
                        <?= htmlspecialchars($commentaireSignaler['id']) ?> :
                    </strong>
                    <?= htmlspecialchars($commentaireSignaler['autheur']) ?>
                        <?= htmlspecialchars($commentaireSignaler['commentaire']) ?>
                </p>
            </a>
        </p>
        <?php $aucunCommentaireSignaler; ?>
        <?php } $afficheLesCommentairesSignaler->closeCursor(); ?>
    </aside>


    <!-- Affiche un message d'erreur en cas de trafic d'url-->
    <?php echo $message; ?>



    <!-- Afficher seulement le commentaire sélectionné par le modérateur pour savoir si il souhaite le supprimer ou pour le conserver -->
    <form id="formEpisodeSignaler" action="signalerUnCommentaire" method="post" id="formAjouter">
        <div>
            <p>Pseudo :</p>
            <p><em>
                    <?= htmlspecialchars($commentaireSelectionner['autheur'])?>
                </em></p>
            <p>Commentaire :</p>
            <p><em>
                    <?= htmlspecialchars($commentaireSelectionner['commentaire'])?>
                </em></p>
        </div>

        <p>Je souhaite supprimer définitivement ce commmentaire <input type="submit" name="supprimer" value="supprimer" /></p>
        <input type="hidden" name="numeroCommentaire" value="<?= htmlspecialchars($_GET['commentaire'])?>">
        <p>Ce commentaire est valide et je souhaite le conserver <input type="submit" name="conserver" value="conserver" /></p>
    </form>

</section>

<div id="alerte">
    <span id="messageAlerte"><?= $messageAlerte ?></span>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
